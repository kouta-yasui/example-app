<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    public function index()
{
    $books = Book::with('reviews')->get();
    return view('books.index', compact('books'));
}
}
