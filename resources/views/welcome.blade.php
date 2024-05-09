@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row g-4">
            @foreach ($movies as $movie)
                <div class="col-3">
                    <div class="card">
                        <h3>{{ $movie['title'] }}</h3>
                        <h5>Original title: {{ $movie['original_title'] }}</h5>
                        <p>Nationality: {{ $movie['nationality'] }}</p>
                        <p>Date: {{ $movie['date'] }}</p>
                        <p>Vote: {{ $movie['vote'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
