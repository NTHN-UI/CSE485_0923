@extends('layouts.app')

@section('title','Add Author')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class=" w-50 mt-4">
                    <form method="POST" action="{{ route('authors.store') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="bio" class="form-label">Biography</label>
                            <textarea name="bio" id="bio" cols="3" rows="5" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
