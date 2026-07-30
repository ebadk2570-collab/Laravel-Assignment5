<h2>Edit Book</h2>

<form action="{{ route('books.update',$book->id) }}" method="POST">
@csrf
@method('PUT')

<input type="text" name="title" value="{{ $book->title }}"><br><br>

<input type="text" name="author" value="{{ $book->author }}"><br><br>

<textarea name="description">{{ $book->description }}</textarea><br><br>

<input type="number" name="published_year"
value="{{ $book->published_year }}"><br><br>

<button type="submit">Update</button>

</form>