@extends('layouts.main-layout')

@section('content')
    <header class="text-center py-3 mb-5 bg-dark text-light">
        <h1>MOVIES</h1>
    </header>

    <div class="container px-4 mb-5">
        <div class="row g-3">
            @foreach ($movies as $movie)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2">
                    <div class="card p-3" style="height: 100%">
                        <h4><b>{{ $movie->original_title }}</b></h4>
                        <h4>{{ $movie->title }}</h4>
                        <p><b>Nationality: </b> {{ $movie->nationality }}</p>
                        <p><b>Release date: </b> {{ $movie->date }}</p>
                        <p><b>Vote: </b> {{ $movie->vote }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
