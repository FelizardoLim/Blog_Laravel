@extends('layouts.app')

@section('content')	
	<div class="col-sm-7 col-sm-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3> {{ $article->title }} </h3>
			</div>
			<div class="panel-body">
				<p> {!! html_entity_decode($article->content) !!} </p>
				@if($article->user_id == Auth::user()->id)
					<div>
						<button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit_article">Edit</button>
						@include ('article/edit')
						<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete_article">Delete</button>
						@include ('article/delete')
					</div>
				@endif
			</div>
		</div>
		@if(count($article->comments))
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Comments: </h4>
				</div>
				<div class="panel-body">
					@if(Session::has('message'))
						<p class="alert alert-success">{{ Session::get('message') }}</p>
					@endif
					@foreach($article->comments as $comment)
						<p>Comment Owner: {{ $comment->owner->name }}</p>
						<p>Posted Date: {{ $comment->created_at }}</p>
						<p>Comment:</p>
						<p>{{ $comment->content }}</p>
					@if($comment->user_id == Auth::user()->id)
						<button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit_comment{{$comment->id}}">Edit</button>
						@include ('comment/edit')
						<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete_comment{{$comment->id}}">Delete</button>
						@include ('comment/delete')
					@endif
						<hr>
					@endforeach
				</div>
			</div>
		@endif
		<form class="form-group" method="POST" action='{{ url("articles/$article->id/comment") }}'>
			{{ csrf_field() }}
			<div class="form-group">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Leave a comment: </h4>
					</div>
					<div class="panel-body">
						<textarea class="form-control" name="comment" rows="5"></textarea><br>
						<button class="btn btn-sm btn-success" type="submit">Submit</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="col-sm-3">
		<div class="text-justify">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
@endsection