@extends('layouts.app')

@section('title','Add Book')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class=" w-50 mt-4">
                    <form method="POST" action="{{ route('books.store') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Author Name</label>
                            <select name="author_id" class="form-control">
                                @foreach($authors as $author)
                                    <option value="$author->id">
                                        {{$author->name}}
                                    </option>
                                @endforeach

                            </select>

                        </div>
                        <div class="form-group mb-3">
                            <label for="bio" class="form-label">Title</label>
                            <textarea name="title" id="title" cols="3" rows="5" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

