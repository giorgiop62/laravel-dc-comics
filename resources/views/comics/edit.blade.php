@extends('layouts.main')

@section('content')
<div class="container">
    <h1>inserisci un nuovo fumetto</h1>

    <form action="{{route('comics.update',$comic)}}" method="POST">

        @csrf
        {{--IL METODO PUT va inserito come direttva blade avendo sempre come method="post--}}
        @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-controll" name="title" id="title" value="{{$comic->title}}" placeholder="Inserire il titolo">
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="text" class="form-controll" name="thumb" id="thumb" value="{{$comic->thumb}}" placeholder="Inserire l'immagine">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">prezzo</label>
        <input type="text" class="form-controll" name="price" id="price" value="{{$comic->price}}" placeholder="Inserire il prezzo">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">series</label>
        <input type="text" class="form-controll" name="series" id="series" value="{{$comic->series}}" placeholder="Inserire la serie">
    </div>

    <div class="mb-3">
        <label for="sale_data" class="form-label">sale_data</label>
        <input type="text" class="form-controll" name="sale_data" id="sale_data" value="{{$comic->sale_data}}" placeholder="Inserire sale_data">
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">type</label>
        <input type="text" class="form-controll" name="type" id="type" value="{{$comic->type}}" placeholder="Inserire il type">
    </div>

    <div class="mb-3">
        <label for="description" class="class-label">Descrizione</label>
        <textarea name="description" id="description"  cols="30" rows="10">value="{{$comic->description}}"</textarea>


    </div>

    <button type="submit" class="btn btn-primary mb-3">Invia</button>

    </form>


</div>

@endsection
