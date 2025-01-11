<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ApparelSize>
 */
class ApparelSizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'size_code' => $this->faker->unique()->word(),
            'sort_order' => $this->faker->numberBetween(1, 10),
        ];
    }
}
