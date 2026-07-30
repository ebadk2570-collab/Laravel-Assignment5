<h2>Books List</h2>

<a href="{{ route('books.create') }}">Add Book</a>

<table border="1" cellpadding="10">
<tr>
    <th>Title</th>
    <th>Author</th>
    <th>Year</th>
    <th>Action</th>
</tr>

@foreach($books as $book)
<tr>
    <td>{{ $book->title }}</td>
    <td>{{ $book->author }}</td>
    <td>{{ $book->published_year }}</td>
    <td>
        <a href="{{ route('books.show',$book->id) }}">View</a>
        <a href="{{ route('books.edit',$book->id) }}">Edit</a>

        <form action="{{ route('books.destroy',$book->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button onclick="return confirm('Delete this book?')">
                Delete
            </button>
        </form>
    </td>
</tr>
@endforeach

</table>