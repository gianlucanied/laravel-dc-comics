@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<h1>Comics: {{ count($comics) }}</h1>
<div>
@foreach ($comics as $comic)
<a href="{{ route('users.show', $comic -> id) }}">
    <h5>{{ $comic -> title }}</h5>
    </a>
@endforeach
</div>
@endsection
