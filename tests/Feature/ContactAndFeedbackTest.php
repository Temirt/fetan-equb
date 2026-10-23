<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ContactAndFeedbackTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Seed admin user
        User::create([
            'name' => 'Fetan Equb Admin',
            'email' => 'admin@fetanequb.com',
            'password' => Hash::make('password123'),
        ]);
    }

    public function test_contact_form_submission_stores_message(): void
    {
        $response = $this->post(route('contact.submit'), [
            'name' => 'Abebe Bikila',
            'email_or_phone' => '+251911287374',
            'subject' => 'Open-Line Equb Inquiry',
            'message' => 'I would like to understand the payout queue schedule.',
        ]);

        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_messages', [
            'name' => 'Abebe Bikila',
            'email_or_phone' => '+251911287374',
            'type' => 'contact',
            'status' => 'new',
        ]);
    }

    public function test_feedback_submission_stores_feedback_with_rating(): void
    {
        $response = $this->post(route('feedback.submit'), [
            'name' => 'Tigist Assefa',
            'email_or_phone' => 'tigist@example.com',
            'subject' => 'Mobile App Experience',
            'rating' => 5,
            'message' => 'The open-line transparency is revolutionary in Ethiopia!',
        ]);

        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_messages', [
            'name' => 'Tigist Assefa',
            'type' => 'feedback',
            'rating' => 5,
            'status' => 'new',
        ]);
    }

    public function test_unauthenticated_user_cannot_access_admin_dashboard(): void
    {
        $response = $this->get(route('admin.dashboard'));
        $response->assertRedirect(route('login'));
    }

    public function test_admin_can_login_and_access_dashboard(): void
    {
        $response = $this->post(route('admin.login.submit'), [
            'email' => 'admin@fetanequb.com',
            'password' => 'password123',
        ]);

        $response->assertRedirect(route('admin.dashboard'));
        $this->assertAuthenticated();

        $dashboardResponse = $this->get(route('admin.dashboard'));
        $dashboardResponse->assertStatus(200);
        $dashboardResponse->assertSee('Admin Console');
    }

    public function test_admin_can_see_contact_and_feedback_messages(): void
    {
        ContactMessage::create([
            'name' => 'Dawit Kebede',
            'email_or_phone' => '+251912345678',
            'type' => 'contact',
            'subject' => 'Corporate Equb',
            'message' => 'Can my company create a pool for 500 staff?',
            'status' => 'new',
        ]);

        ContactMessage::create([
            'name' => 'Hanan Mohammed',
            'email_or_phone' => 'hanan@example.com',
            'type' => 'feedback',
            'subject' => 'Payout speed',
            'rating' => 5,
            'message' => 'Received payout directly on Telebirr in seconds!',
            'status' => 'new',
        ]);

        $admin = User::first();
        $response = $this->actingAs($admin)->get(route('admin.dashboard'));

        $response->assertStatus(200);
        $response->assertSee('Dawit Kebede');
        $response->assertSee('Corporate Equb');
        $response->assertSee('Hanan Mohammed');
        $response->assertSee('Received payout directly on Telebirr');
    }

    public function test_admin_can_update_message_status(): void
    {
        $message = ContactMessage::create([
            'name' => 'Test Sender',
            'email_or_phone' => 'test@example.com',
            'type' => 'contact',
            'subject' => 'Test Subject',
            'message' => 'Testing message content',
            'status' => 'new',
        ]);

        $admin = User::first();
        $response = $this->actingAs($admin)->post(route('admin.messages.status', $message->id), [
            'status' => 'replied',
            'admin_notes' => 'Called user and explained the process.',
        ]);

        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_messages', [
            'id' => $message->id,
            'status' => 'replied',
            'admin_notes' => 'Called user and explained the process.',
        ]);
    }

    public function test_admin_can_delete_message(): void
    {
        $message = ContactMessage::create([
            'name' => 'To Be Deleted',
            'email_or_phone' => 'delete@example.com',
            'type' => 'contact',
            'subject' => 'Delete me',
            'message' => 'Spam message',
            'status' => 'new',
        ]);

        $admin = User::first();
        $response = $this->actingAs($admin)->delete(route('admin.messages.destroy', $message->id));

        $response->assertSessionHas('success');
        $this->assertDatabaseMissing('contact_messages', ['id' => $message->id]);
    }
}
