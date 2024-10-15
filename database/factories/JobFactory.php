<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
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
            'tags' => 'laravel, api, backend',
            'duration' => $this->faker->numberBetween(1, 6),
            'email' => $this->faker->email(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
