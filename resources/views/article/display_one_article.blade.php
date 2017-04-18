@extends('layouts.app')

@section('content')	
	<div class="col-sm-6 col-sm-offset-1">
		<h3> {{ $article->title }} </h3>
		<p> {{ $article->content}} </p>
		@if($article->user_id == Auth::user()->id)
			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit_article">Edit</button>
			@include ('article/edit')
			<a href='{{ url("articles/$article->id/delete") }}'>
				<button type="button" class="btn btn-danger">Delete</button>
			</a>
		@endif
		<h4>Comments: </h4>
		@foreach($article->comments as $comment)
			<p>Comment Owner: {{ $comment->owner->name }}</p>
			<p>Posted Date: {{ $comment->created_at }}</p>
			<p>Comment:</p>
			<p>{{ $comment->content }}</p>
		@endforeach
		<form method="POST" action='{{ url("articles/$article->id/comment") }}'>
			{{ csrf_field() }}
			<label>Leave Comment: </label><br>
			<textarea name="comment"></textarea><br>
			<button type="submit">Submit</button>
		</form>
	</div>
@endsection