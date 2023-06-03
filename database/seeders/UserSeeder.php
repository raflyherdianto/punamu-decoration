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
        $users = [
            [
                "name" => "admin",
                "username" => "admin123",
                "email" => "admin@gmail.com",
                "role" => "admin",
                "gender" => "L",
                "province_id" => 11,
                "regency_id" => 1101,
                "district_id" => 1101010,
                "address" => "Jl. Raya Kampus Udayana",
                "zip_code" => "80361",
                "phone" => "081234567890",
                "bank_name" => "BRI",
                "bank_account" => "1234567890",
                "password" => bcrypt("admin123"),
                "verified" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "customer123",
                "username" => "customer123",
                "email" => "customer123@gmail.com",
                "role" => "customer",
                "gender" => "L",
                "province_id" => 11,
                "regency_id" => 1101,
                "district_id" => 1101010,
                "address" => "Jl. Raya Kampus Udayana",
                "zip_code" => "80361",
                "phone" => "081234567890",
                "bank_name" => "BRI",
                "bank_account" => "1212121",
                "password" => bcrypt("customer123"),
                "verified" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];
        User::insert($users);
    }
}
