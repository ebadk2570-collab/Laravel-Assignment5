@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-warning text-dark">
        <h3 class="mb-0">✏️ Edit Book</h3>
    </div>

    <div class="card-body">

        @if($errors->any())

        <div class="alert alert-danger">

            <ul class="mb-0">

                @foreach($errors->all() as $error)

                <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

        @endif

        <form action="{{ route('books.update', $book->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-bold">Book Title</label>
                <input
                    type="text"
                    name="title"
                    class="form-control"
                    value="{{ old('title', $book->title) }}"
                    placeholder="Enter Book Title">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Author</label>
                <input
                    type="text"
                    name="author"
                    class="form-control"
                    value="{{ old('author', $book->author) }}"
                    placeholder="Enter Author Name">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Description</label>
                <textarea
                    name="description"
                    rows="5"
                    class="form-control"
                    placeholder="Book Description">{{ old('description', $book->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Published Year</label>
                <input
                    type="number"
                    name="published_year"
                    class="form-control"
                    value="{{ old('published_year', $book->published_year) }}"
                    placeholder="e.g. 2024">
            </div>

            <button type="submit" class="btn btn-warning">
                Update Book
            </button>

            <a href="{{ route('books.index') }}" class="btn btn-secondary">
                Cancel
            </a>

        </form>

    </div>

</div>

@endsection