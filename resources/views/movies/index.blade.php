@extends('layouts.app')

@section('title', 'Movies')

@section('content')

    <main>

        <section class="container">
            <h1>Movies</h1>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <p class="card-text">{{ $movie->date }}</p>
                                <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </main>


@endsection
