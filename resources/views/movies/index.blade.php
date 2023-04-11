@extends('layouts.app')

@section('content')
    <h1>Films</h1>
    @foreach ($movies as $movie)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text">{{ $movie->description }}</p>
            </div>
        </div>
    @endforeach
@endsection