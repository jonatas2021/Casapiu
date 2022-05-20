<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sapato>
 */
class SapatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'marca' => $this->faker->name(),
            'modelo' => $this->faker->name(),
            'tamanho' => $this->faker->numberBetween(24, 48),
            'cor' => $this -> faker ->hexColor()
        ];
    }
}
