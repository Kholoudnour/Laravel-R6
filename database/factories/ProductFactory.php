<?php

namespace Database\Factories;

use App\Models\Product;
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
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement(['dress', 'shirts', 'hoodie']),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2),
            'image' => basename(fake()->image(public_path('assets/images/product'))),         ];
    }
}
