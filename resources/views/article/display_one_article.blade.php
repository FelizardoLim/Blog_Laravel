@extends('layouts.app')

@section('content')	
	<div class="col-sm-7 col-sm-offset-1">
	@if(Session::has('message'))
		<p class="alert alert-success">{{ Session::get('message') }}</p>
	@endif
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-10">
						<h3> {{ $article->title }} </h3>
					</div>
					@if($article->user_id == Auth::user()->id)
					<div class="col-xs-2">
						<nav class="dropdown text-right">
							<button class="btn btn-default dropdown-toggle" type="button" id="actions_dd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							    <span class="glyphicon glyphicon-chevron-down"></span>
						    </button>
						  	<ul class="dropdown-menu" aria-labelledby="actions_dd">
							    <li><a data-toggle="modal" data-target="#edit_article">Edit</a></li>
							    <li><a data-toggle="modal" data-target="#delete_article">Delete</a></li>    
						  	</ul>
					  	</nav>
					</div>
					@endif

				</div>
			</div>
			@include ('article/edit')
			@include ('article/delete')
			<div class="panel-body">
				<p> {!! html_entity_decode($article->content) !!} </p>
			</div>
		</div>
		@if(count($article->comments))
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Comments: </h4>
				</div>
				<div class="panel-body">
					@foreach($article->comments as $comment)
						<div class="row">
							<div class="col-xs-6">
								<p>Comment Owner: {{ $comment->owner->name }}</p>
							</div>
							<div class="col-xs-6 text-right">
								<p>Posted Date: {{ $comment->created_at }}</p>
							</div>
						</div>
						<p>Comment:</p>
						<p>{{ $comment->content }}</p>		

						<button class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#add_reply{{ $comment->id }}">Reply</button>
						@include ('reply/create_reply')

						@foreach($comment->replies as $reply)
							<div class="media">
								<div class="media-left">
									<img class="media-object reply_avatar" src='{{ asset("img/".$reply->reply_owner->profile->avatar_src) }}'>
								</div>
								<div class="media-body">
									<p>{{ $reply->reply_content }}</p>
								</div>
							</div>
							@if($reply->user_id == Auth::user()->id)
								<button class="btn btn-sm btn-default" data-toggle="modal" data-target="#edit_reply{{$reply->id}}">Edit</button>
								@include('reply/edit')
								<button class="btn btn-sm btn-default" data-toggle="modal" data-target="#delete_reply{{$reply->id}}">Delete</button>
								@include('reply/delete')
							@endif
						@endforeach
<!-- 							<script>
								$("#flip_reply{{$comment->id}}").click(function() {
									$("#panel_reply{{$comment->id}}").slideToggle("slow");
								});
							</script> -->

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
		<form class="form-group" method="POST" action='{{ url("feed/$article->id/comment") }}'>
			{{ csrf_field() }}
			<div class="form-group">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Leave a comment: </h4>
					</div>
					<div class="panel-body">
						<textarea class="form-control" name="comment" rows="5"></textarea>
						<br>
						<button class="pull-right btn btn-sm btn-success" type="submit">Submit</button>
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