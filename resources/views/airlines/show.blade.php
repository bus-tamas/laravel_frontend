@extends('layout')
@section('content')
    Légitársaság neve: {{$name}}
    <p>Telephelyek:</p>
    <ul>
    @foreach($cities as $city)
       <li>{{$city->name}}</li>
    @endforeach 
    </ul>

@endsection