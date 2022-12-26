<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use App\Models\Team;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TeamTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    use WithFaker;

    /** @test */
    public function admin_can_view_team()
    {
        $response = $this->get('/team');

        $response->assertStatus(302);
    }

    /** @test */
    public function admin_can_create_team()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/team', [
            'name' => $this->faker->name,
            'job' => $this->faker->jobTitle,
            'image' => $this->faker->imageUrl(),
        ]);

        $response->assertStatus(302);
    }

    /** @test */
    public function admin_can_delete_team()
    {
        $user = User::factory()->create();

        $team = Team::factory()->create();

        $response = $this->actingAs($user)->delete('/team/' . $team->id);

        $response->assertStatus(302);
    }
}
