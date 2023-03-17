<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TownController>
 */
class TownFactory extends Factory
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
            'address' => fake()->address(),
            'size' => fake()->randomFloat(0.1, 0.1, 1000),
            'phoneNumber' => fake()->phoneNumber(),
            'youTubeLink' => fake()->url(),
        ];
    }
}
