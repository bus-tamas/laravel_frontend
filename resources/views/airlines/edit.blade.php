@extends('layout')
@section('content')
Légitársaság szerkesztése:
<form action="/airlines/{{$airline->id}}" method="POST">
    @csrf
    @method('put')
    <label for="nameinput">Légitársaság neve:</label>
    <input value='{{$airline->name}}' type="text" name="airlinename" id="nameinput" required>
    <br>
    <label for="cityInput">Légitársaság telephelye:</label>
    <select name="cities[]" multiple required id="cityInput">
        @foreach($cities as $city)
        <option value="{{$city->id}}" @if($airline->cities->pluck('id')->contains($city->id)) selected @endif>{{$city->name}}</option>
        @endforeach 
    </select>
    <br>
    <input type="submit" value="Frissítés">
</form>
<form action="/airlines/{{$airline->id}}" method="POST">
    @csrf
    @method('delete')
<input type="submit" value="Törlés">
</form>
@endsection