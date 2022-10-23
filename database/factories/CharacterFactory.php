<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'intelligence' => $this->faker->numberBetween($min = 10, $max = 100),
            'strength' => $this->faker->numberBetween($min = 10, $max = 100),
            'speed' => $this->faker->numberBetween($min = 10, $max = 100),
            'durability' => $this->faker->numberBetween($min = 10, $max = 100),
            'power' => $this->faker->numberBetween($min = 10, $max = 100),
            'combat' => $this->faker->numberBetween($min = 10, $max = 100),
        ];
    }
}
