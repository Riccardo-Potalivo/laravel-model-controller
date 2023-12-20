@extends('layouts.app')

@section('title', $book->title)

@section('content')

    <main>

        <section class="container">
            <h1>Book</h1>
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $book->cover_image }}" class="card-img-top" alt="{{ $book->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">{{ $book->plot }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


@endsection
