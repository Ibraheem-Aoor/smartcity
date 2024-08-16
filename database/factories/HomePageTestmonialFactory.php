<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomePageTestmonial>
 */
class HomePageTestmonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => '2',
            'name' => fake()->userName(),
            'feedback' => fake()->text(30),
            'location' => fake()->words(2, true),
        ];
    }
}
