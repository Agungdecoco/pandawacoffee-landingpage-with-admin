<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->text('description');
            $table->text('productdesc');
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->timestamps();
        });

        Profile::insert([
            'name' => 'PANDAWACOFFEE',
            'email' => 'pandawacoffee@gmail.com',
            'phone' => '081xxxxxxxx',
            'address' => 'Jl. Raya Kedungkandang No.1, Kedungkandang, Kec. Kedungkandang, Kota Malang, Jawa Timur 65145',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime beatae nobis facere inventore et commodi fuga tempore, provident soluta quibusdam velit vel nihil, non corporis, pariatur voluptatum magnam iure reprehenderit! Nulla tempora rerum dolores vero doloremque repudiandae sint aliquam hic harum illum, sit iure quis excepturi? Deserunt quia aliquam quas.',
            'productdesc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime beatae nobis facere inventore et commodi fuga tempore, provident soluta quibusdam velit vel nihil, non corporis, pariatur voluptatum magnam iure reprehenderit! Nulla tempora rerum dolores vero doloremque repudiandae sint aliquam hic harum illum, sit iure quis excepturi? Deserunt quia aliquam quas.',
            'facebook' => 'pandawacoffee',
            'instagram' => 'pandawacoffee',
            'linkedin' => 'pandawacoffee',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
