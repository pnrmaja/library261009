<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return Book::all();
    }

    public function store(Request $request)
    {
        $record = new Book();
        $record->create($request->all());

        return $record;
    }

    public function show(Book $book)
    {
        return $book;
    }

    public function update(Request $request, Book $book)
    {
        $record = Book::findOrFail($book->id);
        $record->update($request->all());

        return $record;
    }

    public function destroy(Book $book)
    {
        $record = Book::destroy($book->id);

        return $record;
    }
}
