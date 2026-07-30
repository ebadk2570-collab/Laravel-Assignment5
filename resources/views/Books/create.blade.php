@extends('layouts.app')

@section('content')

<h2 class="mb-4">Add New Book</h2>

<form action="{{ route('books.store') }}" method="POST">

@csrf

<div class="mb-3">
<label>Title</label>
<input type="text" name="title" class="form-control">
</div>

<div class="mb-3">
<label>Author</label>
<input type="text" name="author" class="form-control">
</div>

<div class="mb-3">
<label>Description</label>
<textarea name="description" class="form-control"></textarea>
</div>

<div class="mb-3">
<label>Published Year</label>
<input type="number" name="published_year" class="form-control">
</div>

<button class="btn btn-success">
Save Book
</button>

<a href="{{ route('books.index') }}"
class="btn btn-secondary">

Back

</a>

</form>

@endsection