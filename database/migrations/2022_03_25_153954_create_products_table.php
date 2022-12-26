<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('superiority');
            $table->string('description');
            $table->string('icon');
            $table->timestamps();
        });

        Product::insert([
            'superiority' => 'Organic',
            'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi',
            'icon' => 'bx bx-spa',
        ]);

        Product::insert([
            'superiority' => 'Best Price',
            'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi',
            'icon' => 'bx bx-dollar-circle',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
