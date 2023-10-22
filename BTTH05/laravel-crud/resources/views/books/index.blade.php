@extends('layouts.app')

@section('title','Books Management System')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Books Management System</h1>
            </div>
            <div class="col-md-12">
                <a href="{{ route('books.create')}}" class="btn btn-success">Create Book</a>
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Author Name</th>
                        <th scope="col">Title</th>
                        <th class="text-center" scope="col">Details</th>
                        <th class="text-center" scope="col">Edit</th>
                        <th class="text-center" scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            @php
                                $authorName = DB::table('authors')->where('id', $book->author_id)->pluck('name')->first();
                            @endphp
                            <th scope="row">{{ $book->id }}</th>
                            <td>{{ $authorName }}</td>
                            <td>{{ $book->title }}</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-info" href="">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-warning" href="{{ route('books.edit', ['book' => $book]) }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal-{{ $book->id }}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal-{{ $book->id }}" tabindex="-1"
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
                                                <form action="{{route('books.destroy', $book->id)}}" method="POST">
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

