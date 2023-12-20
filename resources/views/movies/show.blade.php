@extends('layouts.app')

@section('title', $movie->title)

@section('content')

    <main>

        <section class="container">
            <h1>Movie</h1>
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }} ({{ $movie->original_title }})</h5>
                            <p class="card-text">{{ $movie->language }}</p>
                            <p class="card-text">{{ $movie->date }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


@endsection
