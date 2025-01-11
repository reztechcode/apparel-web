<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parentCategory = Category::create([
            'category_name' => 'Clothing',
        ]);

        Category::create([
            'category_name' => 'T-Shirts',
            'parent_category_id' => $parentCategory->id,
        ]);

        Category::create([
            'category_name' => 'Jeans',
            'parent_category_id' => $parentCategory->id,
        ]);
    }
}
