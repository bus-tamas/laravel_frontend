<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Flight::factory(20)->create();
        \App\Models\Airline::factory(10)->create();
        \App\Models\City::factory(5)->create();
        \App\Models\Passenger::factory(100)->create();
    }
}
