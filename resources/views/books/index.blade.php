@extends('layouts.app')

@section('title', 'Books')

@section('content')

    <main>

        <section class="container">
            <h1>Books</h1>
            <div class="row">
                @foreach ($books as $book)
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $book->cover_image }}" class="card-img-top" alt="{{ $book->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $book->title }}</h5>
                                <p class="card-text">{{ substr($book->plot, 0, 100) . ' ...' }}</p>
                                <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </main>

@endsection
