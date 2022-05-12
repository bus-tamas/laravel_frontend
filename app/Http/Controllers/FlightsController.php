<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightsController extends Controller
{
    public function show($id)
    {
        $flight = Flight::with('Captain')->findOrFail($id);
        return view('flights.show', [
            'flight' => $flight,
            'passengers' => $flight->passengers->pluck('name')
        ]);
    }

    public function index()
    {
        return view('flights.index', [
            'flights' => Flight::latest()->get()
        ]);
    }
}
