<?php

namespace Database\Factories;

use App\Models\ApparelSize;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'product_name' => $this->faker->word(),
            'other_data' => $this->faker->paragraph(),
            'size_id' => ApparelSize::first()->size_id,
        ];
    }
}
