<h2>Book Details</h2>

<p><b>Title:</b> {{ $book->title }}</p>

<p><b>Author:</b> {{ $book->author }}</p>

<p><b>Description:</b> {{ $book->description }}</p>

<p><b>Published Year:</b> {{ $book->published_year }}</p>

<a href="{{ route('books.index') }}">Back</a>