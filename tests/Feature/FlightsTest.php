<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Flight;

class FlightsTest extends TestCase
{
    use RefreshDatabase;
    public function test_flight_factory()
    {
        $flight = Flight::factory()->create(["name"=>"teszt jarat"]);
        $response = $this->get('/flights/'.$flight->id); //a flights/1 utvonalat fogja behozni.
        $response->assertOk();
        $response->assertSee('teszt jarat');
    }
}
