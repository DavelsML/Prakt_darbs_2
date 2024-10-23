<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Delivery;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProductFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'qty' => fake()->numberBetween(1, 100),
            'price' => fake()->randomFloat(2, 10, 500),
            'description' => fake()->sentence(),
            'delivery' => Delivery::factory(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
}
