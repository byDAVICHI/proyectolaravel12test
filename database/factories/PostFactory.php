<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraph(),
            'categoria' => $this->faker->word(),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'is_active' => $this->faker->boolean(),
            'created_at' => now(), // 2021-01-01 00:00:00
            'updated_at' => now(),  // 2021-01-01 00:00:00
        ];
    }
}
