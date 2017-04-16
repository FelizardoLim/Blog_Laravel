<!DOCTYPE html>
<html>
<head>
	<title>Display All Articles</title>
</head>
<body>
	<h3>Display All Articles</h3>
	@if(Session::has('message'))
		<p>{{ Session::get('message') }}</p>
	@endif
	@foreach($articles as $article)
		<p><a href='{{url("articles/$article->id")}}'>{{ $article->title }}</a></p>
		<p>{{ $article->content }}</p>
	@endforeach
	<a href='{{url("articles/create")}}'><button type="submit" class="btn btn-primary">Add Article</button></a>
</body>
</html>