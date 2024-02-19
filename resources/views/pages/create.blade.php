@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<h1>New Comic</h1>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('fumettos.store')}}"
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
