<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users_test', function (Blueprint $table) {
            $table->id()->autoIncrement()->unsigned();
            $table->string('name', 20);
            $table->string('email')->unique();
            $table->string('password', 255);
            $table->date('birthday');
            $table->boolean('isActive')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_test');
    }
};
