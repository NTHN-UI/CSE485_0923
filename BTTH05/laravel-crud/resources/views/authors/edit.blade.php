@extends('layouts.app')

@section('title', 'Edit Author')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="wrapped w-25 mt-5">
                    <form method="POST" action="{{ route('authors.update', $author->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" name="id" id="id" class="form-control" value="{{ $author->id }}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $author->name }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="bio" class="form-label">Biography</label>
                            <textarea name="bio" id="bio" cols="30" rows="10" class="form-control">{{ $author->bio }}</textarea>
                        </div>
                        <button class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

