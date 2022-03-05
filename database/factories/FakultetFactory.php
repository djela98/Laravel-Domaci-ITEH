<?php

namespace Database\Factories;

use App\Models\Univerzitet;
use Illuminate\Database\Eloquent\Factories\Factory;

class FakultetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->company(),
            'adresa' => $this->faker->streetAddress(),
            'email' => $this->faker->email(),
            'univerzitet_id' => Univerzitet::factory()
        ];
    }
}
