<?php

namespace Database\Factories;

use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    protected $model = Product::class;

    public function definition()
    {
        return [
            'product_name' => $this->faker->word(),
            'size_id' => $this->faker->word(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Product $product) {
            $categories = Category::all()->pluck('id')->toArray();
            $colors = Color::all()->pluck('id')->toArray();

            $product->categories()->sync($this->faker->randomElements($categories, 2));
            $product->colors()->sync($this->faker->randomElements($colors, 2));
        });
    }
}
