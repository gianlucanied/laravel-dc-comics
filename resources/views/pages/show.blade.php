@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Titolo: {{ $comic -> title }}</h1>
    <h2>Casa Editrice: {{ $comic -> publishing_house }}</h2>
    <h2>Prezzo: €{{ $comic -> price }}</h2>
@endsection
