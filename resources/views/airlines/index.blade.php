@extends('layout')
@section('content')
<p>
<a href="/airlines/create">Légitársaság létrehozása</a>
</p>
Airlines:
<ul>
    @foreach($airlines as $airline)
        <li>
            <a href="/airlines/{{$airline->id}}">{{$airline->name}}</a>
            <a href="/airlines/{{$airline->id}}/edit">Szerkesztés</a>
        </li>
    @endforeach
</ul>
@endsection