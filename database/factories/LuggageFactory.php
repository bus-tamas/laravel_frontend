<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Passenger;

class LuggageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number'=>$this->faker->numerify('####'),
            'passenger_id'=>Passenger::inRandomOrder()->first()->id
        ];
    }
}
