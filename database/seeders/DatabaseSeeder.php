<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            "name" => "admin",
            "username" => "admin123",
            "email" => "admin@gmail.com",
            "role" => "admin",
            "gender" => "L",
            "address" => "Jl. Raya Kampus Udayana",
            "zip_code" => "80361",
            "phone" => "081234567890",
            "bank_name" => "BRI",
            "bank_account" => "1234567890",
            "password" => bcrypt("admin123"),
        ]);
    }
}
