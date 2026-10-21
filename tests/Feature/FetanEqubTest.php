<?php

namespace Tests\Feature;

use Tests\TestCase;

class FetanEqubTest extends TestCase
{
    public function test_home_page_loads_successfully(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('FETAN');
        $response->assertSee('EQUB');
        $response->assertSee('ET UM 1170B1');
        $response->assertSee('Dolce Technologies One Member PLC');
        $response->assertSee('com.dolcetechnologies.fetanequb');
        $response->assertDontSee('Create Your Equb on the Web');
    }

    public function test_amharic_locale_rendering(): void
    {
        $response = $this->withSession(['locale' => 'am'])->get('/');
        $response->assertStatus(200);
        $response->assertSee('በዓለም የመጀመሪያው ክፍት መስመር እቁብ');
        $response->assertSee('ዶልቼ ቴክኖሎጂስ');
    }

    public function test_all_pages_load_successfully(): void
    {
        $routes = [
            '/how-it-works',
            '/asset-equbs',
            '/platinum',
            '/faq',
            '/terms',
            '/privacy',
            '/contact',
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200);
        }
    }

    public function test_equb_registration_api(): void
    {
        $payload = [
            'name' => 'Abebe Bikila',
            'phone' => '0911287374',
            'goal' => 'Car',
            'daily_amount' => 500,
            'payment_method' => 'Telebirr',
        ];

        $response = $this->postJson('/api/register-equb', $payload);
        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
        ]);
        $response->assertJsonStructure([
            'success',
            'message',
            'data' => [
                'name',
                'line_number',
                'payout_projection',
                'consistency_score',
            ],
        ]);
    }
}
