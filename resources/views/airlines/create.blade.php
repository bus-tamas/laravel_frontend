@extends('layout')
@section('content')
Új légitársaság:
<form action="/airlines" method="POST">
    @csrf
    <label for="nameinput">Légitársaság neve:</label>
    <input type="text" name="airlinename" id="nameinput" required>
    <br>
    <label for="cityInput">Légitársaság telephelye:</label>
    <select name="cities[]" multiple required id="cityInput">
        @foreach($cities as $city)
        <option value="{{$city->id}}">{{$city->name}}</option>
        @endforeach 
    </select>
    <br>
    <input type="submit" value="Mentés">
</form>
@endsection