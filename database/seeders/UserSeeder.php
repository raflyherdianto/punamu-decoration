<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "admin",
            "username" => "admin123",
            "email" => "admin@gmail.com",
            "role" => "admin",
            "gender" => "L",
            "province_id" => 1,
            "regency_id" => 1,
            "district_id" => 1,
            "address" => "Jl. Raya Kampus Udayana",
            "zip_code" => "80361",
            "phone" => "081234567890",
            "bank_name" => "BRI",
            "bank_account" => "1234567890",
            "password" => bcrypt("admin123"),
        ]);
    }
}
