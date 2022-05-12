<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     * @test
     * @return void
     * 
     */
    public function example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_flight_page()
    {
        $response = $this->get('/flights');

        $response->assertStatus(200);
        $response->assertViewIs('flights.index');
        $response->assertSee('Flights:');
    }
}
