<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->sentence(3),
            "description" => fake()->paragraph(),
            "release_year" => fake()->year(),
            "duration" => fake()->numberBetween(60, 180),
            "image" => fake()->imageUrl(640, 480),
            "genre_id" => \App\Models\Genre::All()->random()->id,
        ];
    }
}
