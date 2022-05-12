@extends('layout')
@section('content')
    Utas neve: {{$name}}<br>
    Repülőjárat száma: {{$flight_number}}<br>
    @if($luggage)
        Poggyász száma: {{$luggage->number}}
    @endif

@endsection