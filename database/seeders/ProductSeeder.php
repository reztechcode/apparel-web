<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'product_name' => 'T-Shirt A',
            'other_data' => 'Data tambahan produk A',
            'size_id' => 1, // Menggunakan size_id dari ApparelSize
        ]);

        Product::create([
            'product_name' => 'T-Shirt B',
            'other_data' => 'Data tambahan produk B',
            'size_id' => 2,
        ]);

        Product::create([
            'product_name' => 'T-Shirt C',
            'other_data' => 'Data tambahan produk C',
            'size_id' => 3,
        ]);
    }
}
