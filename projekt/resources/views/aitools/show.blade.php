@extends('layout')
@section('content')

<h1>{{$aitools->name}} {{$aitool->hasFreePlan ? '`/' : '-'}}</h1>
<h2>Kategóia: {{$aitools->category->name}}</h2>

<p>{{$aitools->description}}</p>
<a href="{{$aitools->link}}">{{$aitools->link}}</a>
<small>{{$aitools->price}}</small>

@endsection