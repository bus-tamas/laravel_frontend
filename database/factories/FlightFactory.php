<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Airline;

class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->userName(),
            'price' => $this->faker->numberBetween(1000, 9000),
            //'captain_id' => 1,
            'airline_id' => Airline::factory()->create(),
        ];
    }
}
