<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained(); // Assuming a foreign key relationship with the 'users' table
            $table->string('kategori'); // Change the data type according to your needs
            $table->string('name');
            $table->string('kondisi'); // Change the data type according to your needs
            $table->integer('harga');
            $table->text('detail');
            $table->string('nomor_hp'); // Change the data type according to your needs
            $table->string('image');
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }

};
