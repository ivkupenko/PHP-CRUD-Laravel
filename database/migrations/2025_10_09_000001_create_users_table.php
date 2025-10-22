<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('users', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->enum('sex', ['male', 'female']);
            $table->string('email')->unique();
            $table->string('location');
            $table->integer('phone');
            $table->timestamps();
    });
  }

    public function down(): void{
        Schema::dropIfExists('users');
    }
};
