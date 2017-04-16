<h4>Edit Existing Article</h4>
<form method="POST" action='{{ url("articles/{$article_to_edit->id}/edit") }}'>
	{{ csrf_field() }}
	<div>
		<label for="name">Title:</label>
		<input type="text" name="title" value='{{ $article_to_edit->title }}'>
	</div>
	<br>
	<div>
		<label for="content">Content:</label>
		<textarea type="text" name="content">{{ $article_to_edit->content }}</textarea>
	</div>
	<br>
	<button type="submit">Submit</button>
</form>