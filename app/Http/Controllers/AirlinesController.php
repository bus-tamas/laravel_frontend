<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airline;
use App\Models\City;

class AirlinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('airlines.index', [
            'airlines'=>Airline::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('airlines.create', [
            'cities'=>City::orderBy('name')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(request()->all());
        // $airline = new Airline();
        // $airline->name = request('airlinename');
        // $airline->save();
        Airline::create([
            'name' => request('airlinename')
        ])->cities()->attach(request('cities'));

        return redirect('airlines');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Airline $airline)
    {
        return view('airlines.show', [
            'name' => $airline->name, 
            'cities' => $airline->cities
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Airline $airline)
    {
        return view('airlines.edit', [
            'cities'=>City::orderBy('name')->get(),
            'airline'=>$airline
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airline $airline)
    {
        //dd(request()->all());
        $airline->update([
            'name' => request('airlinename')
        ]);
        $airline->cities()->sync(request('cities'));
        return redirect('airlines');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airline $airline)
    {
        $airline->delete();
        return redirect('airlines');
    }
}
