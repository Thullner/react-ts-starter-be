<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        return Book::all();
    }


    public function store(BookRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();

            $image->move('storage/', $filename);
            $validated['imageURL'] = url('/') . '/storage/' . $filename;
        }

        unset($validated['image']);

        $book = Book::create($validated);

        return $book;
    }


    public function show(Book $book)
    {
        return $book;
    }


    public function update(BookRequest $request, Book $book)
    {
        $book->update($request->validated());
        return $book;
    }


    public function destroy(Book $book)
    {
        $book->delete();
        return $book;
    }
}
