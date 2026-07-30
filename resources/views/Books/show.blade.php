@extends('layouts.app')

@section('content')

<div class="card">

<div class="card-header bg-primary text-white">

<h3>{{ $book->title }}</h3>

</div>

<div class="card-body">

<p><strong>Author:</strong> {{ $book->author }}</p>

<p><strong>Description:</strong></p>

<p>{{ $book->description }}</p>

<p><strong>Published Year:</strong> {{ $book->published_year }}</p>

<a href="{{ route('books.index') }}"
class="btn btn-secondary">

Back

</a>

</div>

</div>

@endsection