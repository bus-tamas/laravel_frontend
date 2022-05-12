@extends('layout')
@section('content')
    Repülőjárat száma: {{$flight->number}}
    Repülőjárat neve: {{$flight->name}}
    Repülőjárat ára: {{$flight->price}}
    @if($flight->captain)
    Kapitány neve: {{$flight->captain->name}}
    @else
    Ennek a járatnak nincs még kapitánya.
    @endif
    <p>Utasok:</p>
    <ul>
    @forelse($passengers as $passenger)
        <li>
            {{$passenger}}
        </li>    
    @empty
        <li>
            Nincs utasa a repülőjáratnak.
        </li>
    @endforelse
    </ul>

@endsection