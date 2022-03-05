<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UniverzitetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'grad' => $this->faker->city(),
            'godina_osnivanja' => $this->faker->numberBetween($min = 1850, $max = 2019)
        ];
    }
}
