@extends('layout')
@section('content')
Luggage:
<ul>
    @foreach($luggage as $lug)
        <li>
            <a href="/luggage/{{$lug->id}}">{{$lug->number}}</a>
        </li>
    @endforeach
</ul>
@endsection