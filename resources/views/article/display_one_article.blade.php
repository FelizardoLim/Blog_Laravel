<!DOCTYPE html>
<html>
<head>
	<title>Display One Article</title>
</head>
<body>
	<p> {{ $article->title }} </p>
	<p> {{ $article->content}} </p>
	<a href='{{ url("articles/$article->id/edit") }}'><button>Edit</button></a>
	<a href='{{ url("articles/$article->id/delete") }}'><button>Delete</button></a>
	<h3>Comments: </h3>
	@foreach($article->comments as $comment)
		<p>Comment Owner: {{ $comment->owner->name }}</p>
		<p>Posted Date: {{ $comment->created_at }}</p>
		<p>Comment: {{ $comment->content }}</p>
	@endforeach
	<form method="POST" action='{{ url("articles/$article->id/comment") }}'>
		{{ csrf_field() }}
		<label>Leave Comment: </label><br>
		<textarea name="comment"></textarea><br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>