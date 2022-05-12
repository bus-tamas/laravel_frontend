@extends('layout')
@section('content')
Új hozzáadása:
<form action="/passengers" method="POST">
    @csrf
    <label for="nameinput">Utas neve:</label>
    <input type="text" name="passengername" id="nameinput" required>
    <label for="repulojarat">Utas repülőjárata:</label>
    <select name="repulojarat" id="repulojarat">
        @foreach($flights as $flight)
            <option value="{{$flight->id}}">{{$flight->number}}</option>
        @endforeach
    </select>
    <input type="submit" value="Mentés">
</form>
@endsection