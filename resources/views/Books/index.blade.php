@extends('layouts.app')

@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}

    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

@if($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="fw-bold text-primary">
         Library Management System
    </h2>

    <a href="{{ route('books.create') }}" class="btn btn-primary">
        + Add New Book
    </a>

</div>

<div class="card shadow">

    <div class="card-body">

        <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark">

                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Published Year</th>
                    <th width="250">Action</th>
                </tr>

            </thead>

            <tbody>

                @forelse($books as $book)

                <tr>

                    <td>{{ $book->id }}</td>

                    <td>{{ $book->title }}</td>

                    <td>{{ $book->author }}</td>

                    <td>{{ $book->published_year }}</td>

                    <td>

                        <a href="{{ route('books.show',$book->id) }}"
                           class="btn btn-info btn-sm">
                            View
                        </a>

                        <a href="{{ route('books.edit',$book->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('books.destroy',$book->id) }}"
                              method="POST"
                              class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this book?')">

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="5" class="text-center text-muted py-4">

                        <h5>No Books Found </h5>

                        <p>Add your first book by clicking the <strong>Add New Book</strong> button.</p>

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection