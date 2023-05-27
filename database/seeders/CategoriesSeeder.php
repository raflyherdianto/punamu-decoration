<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Decoration',
                'category_code' => 'DECOR',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Make Up',
                'category_code' => 'MAKEUP',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ];
        Category::insert($categories);
    }
}
