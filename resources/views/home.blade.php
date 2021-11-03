@extends('layouts.main')

@section("title", "Movies-List")


@section("content")

<h1 class="text-center text-uppercase">Movies:</h1>
@foreach ($movies as $movie)

<div class="card container">
    <div class="card-body">
      <h5 class="card-title text-uppercase">{{$movie->title}}</h5>
      <h6 class="card-original-title mb-2 text-muted">{{$movie->original_title}}</h6>
      <h6 class="card-text">{{$movie->nationality}}</h6>
      <h6 class="card-text">{{$movie->date}}</h6>
      <h6 class="card-text">{{$movie->vote}}</h6>
    </div>
  </div>
    
@endforeach
@endsection