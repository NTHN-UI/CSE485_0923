@extends('layouts.app')

@section('title','Authors Management System')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Authors Management System</h1>
        </div>
        <div class="col-md-12">
            <a href="{{ route('authors.create')}}" class="btn btn-success">Create Author</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Biography</th>
                    <th class="text-center" scope="col">Details</th>
                    <th class="text-center" scope="col">Edit</th>
                    <th class="text-center" scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($authors as $author)
                    <tr>
                        <th scope="row">{{ $author->id }}</th>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->bio }}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-info" href="">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-warning" href="{{ route('authors.edit', ['author' => $author]) }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal-{{ $author->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal-{{ $author->id }}" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title" id="exampleModalLabel">Delete Confirmation</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this author?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <form action="{{route('authors.destroy', $author->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection

