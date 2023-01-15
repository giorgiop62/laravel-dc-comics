@extends('layouts.main')

@section('content')
<div class="container">
    <h1>inserisci un nuovo fumetto</h1>

    <form action="{{route('comics.store')}}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-controll" name="title" id="title" placeholder="Inserire il titolo">
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="text" class="form-controll" name="thumb" id="thumb" placeholder="Inserire l'immagine">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">prezzo</label>
        <input type="text" class="form-controll" name="price" id="price" placeholder="Inserire il prezzo">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">series</label>
        <input type="text" class="form-controll" name="series" id="series" placeholder="Inserire la serie">
    </div>

    <div class="mb-3">
        <label for="sale_data" class="form-label">sale_data</label>
        <input type="text" class="form-controll" name="sale_data" id="sale_data" placeholder="Inserire sale_data">
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">type</label>
        <input type="text" class="form-controll" name="type" id="type" placeholder="Inserire il type">
    </div>

    <div class="mb-3">
        <label for="description" class="class-label">Descrizione</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>


    </div>

    <button type="submit" class="btn btn-primary mb-3">Invia</button>

    </form>


</div>

@endsection
