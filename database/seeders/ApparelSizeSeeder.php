<?php

namespace Database\Seeders;

use App\Models\ApparelSize;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApparelSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ApparelSize::create([
            'size_code' => 'S',
            'sort_order' => 1,
        ]);
        
        ApparelSize::create([
            'size_code' => 'M',
            'sort_order' => 2,
        ]);
        
        ApparelSize::create([
            'size_code' => 'L',
            'sort_order' => 3,
        ]);
        
        ApparelSize::create([
            'size_code' => 'XL',
            'sort_order' => 4,
        ]);
        ApparelSize::factory(1)->create();
    }
}
