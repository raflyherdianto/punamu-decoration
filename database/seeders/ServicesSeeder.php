<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Decor 1',
                'category_id' => 1,
                'description' => 'Include: Lighting, Inisial Nama, Kursi, Karpet. Free: Welcome Sign, Sewa Hand Bouquet, Gapura Masuk, Pundi Amplop',
                'price' => 1100000,
                'rating' => 4.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Decor 2',
                'category_id' => 1,
                'description' => 'Include: Lighting, Inisial Nama, Kursi, Karpet. Free: Welcome Sign, Sewa Hand Bouquet, Gapura Masuk, Pundi Amplop',
                'price' => 1300000,
                'rating' => 4.7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Decor 3',
                'category_id' => 1,
                'description' => 'Include: Lighting, Inisial Nama, Kursi, Karpet. Free: Welcome Sign, Sewa Hand Bouquet, Gapura Masuk, Pundi Amplop',
                'price' => 1000000,
                'rating' => 4.6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Decor 4',
                'category_id' => 1,
                'description' => 'Include: Lighting, Inisial Nama, Kursi, Karpet. Free: Welcome Sign, Sewa Hand Bouquet, Gapura Masuk, Pundi Amplop',
                'price' => 1800000,
                'rating' => 4.8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Decor 5',
                'category_id' => 1,
                'description' => 'Include: Lighting, Inisial Nama, Kursi, Karpet. Free: Welcome Sign, Sewa Hand Bouquet, Gapura Masuk, Pundi Amplop',
                'price' => 2300000,
                'rating' => 4.8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Decor 6',
                'category_id' => 1,
                'description' => 'Include: Lighting, Inisial Nama, Kursi, Karpet. Free: Welcome Sign, Sewa Hand Bouquet, Gapura Masuk, Pundi Amplop',
                'price' => 2200000,
                'rating' => 4.9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Decor 7',
                'category_id' => 1,
                'description' => 'Include: Lighting, Inisial Nama, Kursi, Karpet. Free: Welcome Sign, Sewa Hand Bouquet, Gapura Masuk, Pundi Amplop',
                'price' => 2350000,
                'rating' => 4.9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Decor 8',
                'category_id' => 1,
                'description' => 'Include: Lighting, Inisial Nama, Kursi, Karpet. Free: Welcome Sign, Sewa Hand Bouquet, Gapura Masuk, Pundi Amplop',
                'price' => 2100000,
                'rating' => 4.8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Decor 9',
                'category_id' => 1,
                'description' => 'Include: Lighting, Inisial Nama, Kursi, Karpet. Free: Welcome Sign, Sewa Hand Bouquet, Gapura Masuk, Pundi Amplop',
                'price' => 2500000,
                'rating' => 4.9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Makeup 1',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'price' => 1000000,
                'rating' => 4.7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Makeup 2',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'price' => 900000,
                'rating' => 4.8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Makeup 3',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'price' => 1100000,
                'rating' => 4.9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Makeup 4',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'price' => 1200000,
                'rating' => 4.8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Makeup 5',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'price' => 2000000,
                'rating' => 4.9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Makeup 6',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'price' => 1500000,
                'rating' => 4.8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Makeup 7',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'price' => 1200000,
                'rating' => 4.7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Makeup 8',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'price' => 1100000,
                'rating' => 4.7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Makeup 9',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'price' => 1600000,
                'rating' => 4.8,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];
        Service::insert($services);
    }
}
