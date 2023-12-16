<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $rooms = Book::all();

        return view('rooms.book', compact('rooms'));
    }
}

