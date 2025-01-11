<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use App\Models\ApparelSize;
use App\Models\ProductColor;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Database\Seeders\ColorSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\ApparelSizeSeeder;
use Database\Seeders\ProductCategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'irez',
        //     'email' => 'me@rezweb.my.id',
        //     'password' => bcrypt('password'),
        //     'email_verified_at' => now(),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        $this->call([
            ApparelSizeSeeder::class,
            ProductSeeder::class,
            ColorSeeder::class,
            CategorySeeder::class,
            ProductCategorySeeder::class,
        ]);
    }
}
