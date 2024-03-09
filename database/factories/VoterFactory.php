<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoterFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' =>fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'address' => fake()->address(),
        ];
    }
}
