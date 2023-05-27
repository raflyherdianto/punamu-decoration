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
                'name' => 'Wedding Decor 1',
                'category_id' => 1,
                'description' => 'Include: Lighting, Inisial Nama, Kursi, Karpet'.' Free: Welcome Sign, Sewa Hand Bouquet, Gapura Masuk, Pundi Amplop',
                'price' => 1000000,
                'rating' => 4.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wedding Decor 2',
                'category_id' => 1,
                'description' => 'Include: Lighting, Inisial Nama, Kursi, Karpet'.' Free: Welcome Sign, Sewa Hand Bouquet, Gapura Masuk, Pundi Amplop',
                'price' => 1500000,
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wedding Decor 3',
                'category_id' => 1,
                'description' => 'Include: Lighting, Inisial Nama, Kursi, Karpet'.' Free: Welcome Sign, Sewa Hand Bouquet, Gapura Masuk, Pundi Amplop',
                'price' => 2000000,
                'rating' => 4.7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wedding MakeUp 1',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl eget ultricies aliquam, nunc nisl ultricies nunc, vitae aliquam nisl nunc vitae nisl. Sed vitae nisl eget nisl aliquam aliquet. Sed vitae nisl eget nisl aliquam aliquet.',
                'price' => 2000000,
                'rating' => 4.7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wedding MakeUp 2',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Null /a euismod, nisl eget ultricies aliquam, nunc nisl ultricies nunc, vitae aliquam nisl nunc vitae nisl. Sed vitae nisl eget nisl aliquam aliquet. Sed vitae nisl eget nisl aliquam aliquet.',
                'price' => 1000000,
                'rating' => 4.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wedding MakeUp 3',
                'category_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl eget ultricies aliquam, nunc nisl ultricies nunc, vitae aliquam nisl nunc vitae nisl. Sed vitae nisl eget nisl aliquam aliquet. Sed vitae nisl eget nisl aliquam aliquet.',
                'price' => 2000000,
                'rating' => 4.7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Service::insert($services);
    }
}
