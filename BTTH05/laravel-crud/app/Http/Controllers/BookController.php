<?php

namespace App\Http\Controllers;


use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $authors = Author::all();
        return view('books.add', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'author_id' => 'required',
            'title' => 'required',
        ]);

        $book = new Book();
        $book->author_id = $validator['author_id'];
        $book->title = $validator['title'];
        $book->save();



        return redirect()->route('books.index')->with('success', 'Book created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $authors = Author::all();
        $author = Author::find($book->author_id);
        return view('books.edit', compact('book', 'authors', 'author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $validator = $request->validate([
            'title' => 'required',
        ]);
        $book = Book::find($id);
        $book->title = $validator['title'];
        $book->save();



        return redirect()->route('books.index')->with('success', 'Book created successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }
}
