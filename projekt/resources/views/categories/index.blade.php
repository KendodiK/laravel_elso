@extends('layout')

@section('content')
<h1>Kategóriák</h1>

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<ul>
    @foreach ($categories as $category)
        <li>
            {{$category->name}}
            <a href="{{route('categories.edit', $category->id)}}" class="button">Szerkesztés</a>
            <a href="{{route('categories.show', $category->id)}}" class="button">Megjelenítés</a>
            <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Tututira töröljük?')">Törlés</button>
            </form>
        </li>    
    @endforeach
</ul>
@endsection