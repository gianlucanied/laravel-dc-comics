@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<h1>Comics: {{ count($comics) }} </h1>
<button><a href="{{ route('comics.create') }}">Create</a></button>
<br>
<br>
<div>
@foreach ($comics as $comic)
<a href="{{ route('comics.show', $comic -> id) }}">
    <h5>{{ $comic -> title }}</h5>
    </a>
    <a class="mx-3" href="{{ route('comics.edit', $comic -> id) }}">EDIT</a>
    <form action="{{ route('comics.destroy', $comic -> id) }}"
    method="POST">

    @csrf
    @method('DELETE')
        <input type="submit" value="X">
    </form>
@endforeach
</div>
@endsection
