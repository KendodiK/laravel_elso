@extends('layout')

@section('content')
<h1>Új Kategória</h1>

@error('name')
<div class="alert alert-warning">{{$message}}</div>
@enderror

<form action="{{route('categories.store')}}" method="post">
    @csrf
    <input>
    <fieldset>
        <label for="name">Kategória név</label>
        <input type="text" name="name" id="name"></input>
    </fieldset>
    <button type="submit">Ment</button>
</form>
@endsection
