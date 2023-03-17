<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name,
            'priceRUB' => fake()->numberBetween(1000, 1000000000),
            'priceUSD' => fake()->numberBetween(1000, 1000000000),
            'countFloor' => fake()->numberBetween(1, 1000),
            'countBedroom' => fake()->numberBetween(1, 100),
            'size' => fake()->randomFloat(0.1, 0.1, 100),
            'houseType_id' => fake()->numberBetween(1, 4),
            'town_id' => fake()->numberBetween(1,3),
        ];
    }
}
