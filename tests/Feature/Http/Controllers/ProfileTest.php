<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    use WithFaker;

    /** @test */
    public function admin_can_update_profile()
    {
        $user = User::factory()->create();
        $profile = Profile::factory()->create();

        $response = $this->actingAs($user)->post('/profile', [
            'name' => 'PANDAWACOFFEE',
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'description' => $this->faker->text,
            'productdesc' => $this->faker->text,
            'facebook' => $this->faker->url,
            'instagram' => $this->faker->url,
            'linkedin' => $this->faker->url,
        ]);

        $response->assertStatus(302);
    }
}
