@extends('layout')

@section('content')

<h1>AI eszközök
    <a href="{{route('aitools.create')}}" title="Új AI eszköz">°</a>
</h1>

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<ul>
    @foreach ($aitools as $aitool)
    <li>
        {{$aitool->name}}
        <a href="{{route('aitools.edit', $aitool->id)}}" class="button">Szerkesztés</a>
        <a href="{{route('aitools.show', $aitool->id)}}" class="button">Megjelenítés</a>
        <form action="{{route('aitools.destroy', $aitool->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Tututira töröljük?')">Törlés</button>
        </form>
    </li> 
    @endforeach
</ul>

@endsection