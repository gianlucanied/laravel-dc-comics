@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Titolo: {{ $fumetto -> title }}</h1>
    <h2>Casa Editrice: {{ $fumetto -> publishing_house }}</h2>
    <h2>Prezzo: €{{ $fumetto -> price }}</h2>
@endsection
