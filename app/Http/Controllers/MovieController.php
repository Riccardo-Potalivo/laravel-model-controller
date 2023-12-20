<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        // dd($movies);
        return view("movies.index", compact("movies"));
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        // dd($movies);
        return view("movies.show", compact("movie"));
    }
}

