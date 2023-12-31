<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        // dd($books);
        return view("books.index", compact("books"));
    }
    public function show($id)
    {
        $book = Book::findOrFail($id);
        // dd($book);
        return view("books.show", compact("book"));
    }
}
