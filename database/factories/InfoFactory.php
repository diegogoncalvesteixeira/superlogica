<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cpf' => $this->faker->numberBetween(10000000000, 99999999999),
            'genero' => $this->faker->randomElement(['M', 'F']),
            'ano_nascimento' => $this->faker->year,
        ];
    }
}
