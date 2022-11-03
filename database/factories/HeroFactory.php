<?php

namespace Database\Factories;
use App\Models\Character;
use Illuminate\Database\Eloquent\Factories\Factory;

class HeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->image(storage_path('app/images'), 50, 50, true),
            'name' => $this->faker->name,
            'character_id' => Character::all()->random()->id,
            'alignment' => $this->faker->randomElement(['Good', 'Badass']),
            'height' => $this->faker->numberBetween($min = 180, $max = 220),
            'weight' => $this->faker->numberBetween($min = 80, $max = 120),
            'aliases' => $this->faker->name,
        ];

    }
}
