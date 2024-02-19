@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<h1>Edit fumetto</h1>
<form action="{{ route('fumettos.update', $fumetto -> id) }}"
method="POST">

@csrf
@method('PUT')

    <label for="title">Titolo</label>
    <input type="text" name="title" id="title" value="{{ $fumetto -> title }}">
    <br>
    <label for="publishing_house">Casa Editrice</label>
    <input type="text" name="publishing_house" id="publishing_house" value="{{ $fumetto -> publishing_house }}">
    <br>
    <label for="price">Prezzo</label>
    <input type="text" name="price" id="price" value="{{ $fumetto -> price }}">
    <br>
    <input type="submit" value="UPDATE">
</form>
@endsection
