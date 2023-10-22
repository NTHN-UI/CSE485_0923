@extends('layouts.app')

@section('title', 'Edit Book')

@section('content')
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapped w-50 mt-4">
                        <form method="POST" action="{{ route('books.update', $book->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="author_id" class="form-label">Author Name</label>
                                <select name="author_id" class="form-select">
                                    <option value="{{ $author->id }}" selected>{{ $author->name }}</option>
                                    @foreach($authors as $author)
                                        <option value="{{ $author->id }}">
                                            {{ $author->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="title" class="form-label">Title</label>
                                <textarea name="title" id="title" cols="30" rows="10" class="form-control">{{ $book->title }}</textarea>
                            </div>
                            <button class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection



