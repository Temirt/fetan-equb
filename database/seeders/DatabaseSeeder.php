<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdminUserSeeder::class);

        // Seed initial sample inquiries if empty
        if (ContactMessage::count() === 0) {
            ContactMessage::create([
                'name' => 'Abebe Bikila',
                'email_or_phone' => '+251911287374',
                'type' => 'contact',
                'subject' => 'Open-Line Equb Inquiry',
                'message' => 'Greetings Fetan Equb team! I run a logistics startup in Addis Ababa with 18 employees. We are interested in creating an open-line pool for corporate equipment savings. Can we schedule a brief consultation at your Kirkos office?',
                'status' => 'new',
                'ip_address' => '196.188.240.10',
            ]);

            ContactMessage::create([
                'name' => 'Selamawit Tadesse',
                'email_or_phone' => 'selamawit.t@gmail.com',
                'type' => 'feedback',
                'subject' => 'Mobile App Experience',
                'rating' => 5,
                'message' => 'I love the transparent queue system! In traditional equb I used to wait for months without knowing when my turn was. With Fetan Equb, seeing my exact date from day one gives total peace of mind.',
                'status' => 'read',
                'admin_notes' => 'Reviewed and sent app satisfaction survey.',
                'ip_address' => '197.156.70.44',
            ]);

            ContactMessage::create([
                'name' => 'Dawit Girma',
                'email_or_phone' => '+251922334455',
                'type' => 'feedback',
                'subject' => 'Payment Speed & CBE / Telebirr',
                'rating' => 5,
                'message' => 'The Telebirr integration is seamless. My daily contribution reflects within seconds and my consistency score went up immediately.',
                'status' => 'new',
                'ip_address' => '196.189.12.3',
            ]);

            ContactMessage::create([
                'name' => 'Hanna Tesfaye',
                'email_or_phone' => 'hanna.tesfaye@yahoo.com',
                'type' => 'contact',
                'subject' => 'Platinum VIP Program',
                'message' => 'Hello, I would like to know the exact advance payment requirements for Platinum tier and how the 6-month payout guarantee works for vehicle asset equb.',
                'status' => 'replied',
                'admin_notes' => 'Called customer on WhatsApp and sent Platinum brochure PDF.',
                'ip_address' => '213.55.101.88',
            ]);
        }
    }
}
