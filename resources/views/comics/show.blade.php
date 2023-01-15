@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Dettagli fumetto</h1>

    <h2>{{$comic->title}}</h2>
    <div class="text-center">
        <img src="{{$comic->thumb}}" alt="">
        <p>{!!$comic->description!!}</p>

    </div>

    <a  class="btn btn-info" href="{{route('comics.create')}}">Torna indietro</a>



</div>
@endsection
