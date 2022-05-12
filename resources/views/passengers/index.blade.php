@extends('layout')
@section('content')
<p>
<a href="/passengers/create">Utas hozzáadása</a>
</p>
Passengers:
<ul>
    @foreach($passengers as $passenger)
        <li>
            <a href="/passengers/{{$passenger->id}}">{{$passenger->name}}</a>
            <a href="/passengers/{{$passenger->id}}/edit">Szerkesztés</a>
        </li>
    @endforeach
</ul>
@endsection