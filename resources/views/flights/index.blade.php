@extends('layout')
@section('content')
Flights:
<ul>
    @foreach($flights as $flight)
        <li>
            <a href="/flights/{{$flight->id}}">{{$flight->name}}</a>
        </li>
    @endforeach
</ul>
@endsection