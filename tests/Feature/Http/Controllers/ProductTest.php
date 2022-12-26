<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    use WithFaker;

    /** @test */
    public function admin_can_view_products_page()
    {
        $response = $this->get('/product');

        $response->assertStatus(302);
    }

    /** @test */
    public function admin_can_store_product()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/product', [
            'superiority' => 'test',
            'description' => 'test',
            'icon' => 'test',
        ]);

        $response->assertStatus(302);
    }

    /** @test */
    public function admin_can_update_product()
    {
        $user = User::factory()->create();

        $product = Product::factory()->create();

        $response = $this->actingAs($user)->post(route('product.update', $product->id), [
            'superiority' => 'test1',
            'description' => 'test1',
            'icon' => 'test1',
        ]);

        $response->assertStatus(302);
    }

    public function admin_can_delete_product()
    {
        $user = User::factory()->create();

        $product = Product::factory()->create();

        $response = $this->actingAs($user)->delete('/product/' . $product->id);

        $response->assertStatus(302);
    }
}
