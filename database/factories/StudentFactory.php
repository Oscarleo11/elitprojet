<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->name(),
            'prenom' => fake()->name('prenom'),
            'age' => fake()->numberBetween($min = 18, $max = 20),
            'dateNaissance' => fake()->dateTimeThisCentury->format('Y-m-d'),
            'phone' => fake()->phoneNumber(),
        ];
    }
}
