<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence,
            'engine_Size' => fake()->sentence,
            'car_Image' => fake()->imageUrl,
            'colour' => fake()->sentence,
            'price' => fake()->sentence,
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
