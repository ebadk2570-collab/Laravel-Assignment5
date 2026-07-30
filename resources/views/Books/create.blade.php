<h2>Add Book</h2>

<form action="{{ route('books.store') }}" method="POST">
@csrf

Title
<input type="text" name="title"><br><br>

Author
<input type="text" name="author"><br><br>

Description
<textarea name="description"></textarea><br><br>

Published Year
<input type="number" name="published_year"><br><br>

<button type="submit">Save</button>

</form>