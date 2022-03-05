<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Fakultet;
use App\Models\Univerzitet;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime_prezime' => $this->faker->name(),
            'jmbg' => $this->faker->randomNumber($nbDigits = 8, $strict = false),
            'broj_indeksa' => $this->faker->randomNumber($nbDigits = 6, $strict = false),
            'fakultet_id' => Fakultet::factory(),
            'univerzitet_id' => Univerzitet::factory(),
        ];
    }
}
