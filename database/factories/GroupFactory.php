<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'max_members' => fake()->numberBetween(2, 10),
            'price' => fake()->numberBetween(100, 50000),
            'status' => fake()->randomElement(['active', 'canceled']),
        ];
    }

    public function private(): static
    {
        return $this->state(fn(array $attributes) => [
            'is_private' => true,
        ]);
    }

    public function pending(): static
    {
        return $this->state(fn(array $attributes) => [
            'status' => 'pending',
        ]);
    }
}
