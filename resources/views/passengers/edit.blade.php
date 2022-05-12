@extends('layout')
@section('content')
Utas szerkesztése:
<form action="/passengers/{{$passenger->id}}" method="POST">
    @csrf
    @method('put')
    <label for="nameinput">Utas neve:</label>
    <input value='{{$passenger->name}}' type="text" name="name" id="nameinput" required>
    <br>
    <label for="repulojarat">Utas repülőjárata:</label>
    <select name="flight_id" id="repulojarat">
        @foreach($flights as $flight)
            <option value="{{$flight->id}}" @if($flight->id == $passenger->flight_id) selected @endif>{{$flight->number}}</option>
        @endforeach
    </select>
    <input type="submit" value="Frissítés">
</form>
@endsection