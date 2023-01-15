@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>FUMETTI</h1>

        @forelse ($comics as $comic)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$comic->thumb}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{$comic->description}}</p>
                    <a class="btn btn-primary" href="{{route('comics.show', $comic)}}"> Show</a>
                    <a class="btn btn-danger" href="#">Elimina </a>
                    <a class="btn btn-secondary" href="{{route('comics.edit', $comic)}}">Modifica</a>

                </div>
            @empty
        @endforelse
    @endsection
