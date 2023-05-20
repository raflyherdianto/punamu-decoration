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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->enum('role', ['admin', 'customer']);
            $table->enum('gender', ['L', 'P']);
            $table->foreignId('province_id');
            $table->foreignId('regency_id');
            $table->foreignId('district_id');
            $table->string('address');
            $table->string('zip_code');
            $table->string('phone');
            $table->string('bank_name')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
