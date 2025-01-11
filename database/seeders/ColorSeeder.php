<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Color::create([
            'color_code' => 'red',
            'color_name' => 'Red',
        ]);
        
        Color::create([
            'color_code' => 'blue',
            'color_name' => 'Blue',
        ]);
        
        Color::create([
            'color_code' => 'green',
            'color_name' => 'Green',
        ]);
    }
}
