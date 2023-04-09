<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IpkFactory extends Factory
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
            'ipk' => rand(0, 40) / 10,
        ];
    }
}
