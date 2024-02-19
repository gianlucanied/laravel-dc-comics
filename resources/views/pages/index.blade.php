@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<h1>Comics: {{ count($fumettos) }} </h1>
<button><a href="{{ route('fumettos.create') }}">Create</a></button>
<br>
<br>
<div>
@foreach ($fumettos as $fumetto)
<a href="{{ route('fumettos.show', $fumetto -> id) }}">
    <h5>{{ $fumetto -> title }}</h5>
    </a>
    <a class="mx-3" href="{{ route('fumettos.edit', $fumetto -> id) }}">EDIT</a>
    <form action="{{ route('fumettos.destroy', $fumetto -> id) }}"
    method="POST">

    @csrf
    @method('DELETE')
        <input type="submit" value="X">
    </form>
@endforeach
</div>
@endsection
