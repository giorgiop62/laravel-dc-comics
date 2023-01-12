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

                </div>
            @empty
        @endforelse
    @endsection
