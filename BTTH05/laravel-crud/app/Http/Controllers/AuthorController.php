<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all(); // select*from authors
        return view('authors.index',compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'bio' => 'required',
        ]);

        $author = new Author();
        $author->name = $validator['name'];
        $author->bio = $validator['bio'];
        $author->save();



        return redirect()->route('authors.index')->with('success', 'Author created successfully');



    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)   //authors/{author}
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {

        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validator = $request->validate([
            'name' => 'required',
            'bio' => 'required',
        ]);

        $author = Author::find($id);
        $author->name = $validator['name'];
        $author->bio = $validator['bio'];
        $author->save();
        return redirect()->route('authors.index')->with('success', 'Author updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('authors.index')->with('success', 'Author deleted successfully');

    }
}
