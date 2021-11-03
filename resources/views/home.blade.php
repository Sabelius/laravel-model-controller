@extends('layouts.main')

@section("title", "Movies-List")


@section("content")

<h1 class="text-center text-uppercase">Movies:</h1>
@foreach ($movies as $movie)

<div class="card container col-4 mt-3">
    <div class="card-body">
      <h5 class="card-title text-uppercase text-center">{{$movie->title}}</h5>
      <h6 class="card-original-title mb-2 text-muted text-center">{{$movie->original_title}}</h6>
      <h6 class="card-text text-capitalize text-center">{{$movie->nationality}}</h6>
      <h6 class="card-text text-center">{{$movie->date}}</h6>
      <h6 class="card-text text-center">{{$movie->vote}}</h6>
    </div>
</div>
    
@endforeach
@endsection