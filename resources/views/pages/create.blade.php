@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<h1>New Comic</h1>
<form action="{{route('users.store')}}"
method="POST">

@csrf
@method('POST')

    <label for="title">Titolo</label>
    <input type="text" name="title" id="title">
    <br>
    <label for="publishing_house">Casa Editrice</label>
    <input type="text" name="publishing_house" id="publishing_house">
    <br>
    <label for="price">Prezzo</label>
    <input type="text" name="price" id="price">
    <br>
    <input type="submit" value="Create">
</form>
@endsection
