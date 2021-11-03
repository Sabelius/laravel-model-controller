@extends('layouts.main')

@section("title", "Movies-List")


@section("content")


<div class="container">
    <div class="row">
        <h1 class="col-12 mt-2 text-center text-uppercase">movies:</h1>
    </div>
    <div class="row d-flex row-cols-5">
        @foreach ($movies as $movie)
        <div class="card-deck pt-5">
            <div class="card col">
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-center">{{$movie->title}}</h5>
                    <h6 class="card-original-title mb-2 text-muted text-center">{{$movie->original_title}}</h6>
                    <h6 class="card-text text-capitalize text-center">{{$movie->nationality}}</h6>
                    <h6 class="card-text text-center">{{$movie->date}}</h6>
                    <h6 class="card-text text-center">{{$movie->vote}}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection