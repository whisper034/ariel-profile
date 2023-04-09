<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MataKuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'student_id' => mt_rand(1, 5),
            'mata_kuliah' => trim($this->faker->sentence(mt_rand(1, 4)), "."),
        ];
    }
}
