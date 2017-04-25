@extends('layouts.app')

@section('content')	
	<div class="col-sm-7 col-sm-offset-1">
		@if(Session::has('message'))
			<p class="alert alert-success">{{ Session::get('message') }}</p>
		@endif
		@if(null===$article->photo && null===$article->video)
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
								    <li><a data-toggle="modal" data-target="#edit_article{{ $article->id }}">Edit</a></li>
								    <li><a data-toggle="modal" data-target="#delete_article{{ $article->id }}">Delete</a></li>    
							  	</ul>
						  	</nav>
						</div>
						@endif
					</div>
				</div>
				<!-- for edit / delete feed modals -->
				@include ('article/edit')
				@include ('article/delete')
				<div class="panel-body">
					<p> {!! html_entity_decode($article->content) !!} </p>
				</div>
			</div>
		@elseif(null!==$article->video)
			<div class="thumbnail">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="{{ $article->video->video_src }}" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="caption">
					<p>{!! html_entity_decode($article->video->video_caption) !!}</p>
					@if($article->user_id == Auth::user()->id)
						<div class="thumbnail_nav">
							<nav class="dropdown">
								<button class="btn btn-default dropdown-toggle" type="button" id="actions_dd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								    <span class="glyphicon glyphicon-chevron-down"></span>
							    </button>
							  	<ul class="dropdown-menu" aria-labelledby="actions_dd">
								    <li><a data-toggle="modal" data-target="#edit_video{{ $article->id }}">Edit</a></li>
								    <li><a data-toggle="modal" data-target="#delete_video{{ $article->id }}">Delete</a></li>  
							  	</ul>
						  	</nav>
						</div>
					@endif
				</div>
				@include ('video/edit_video')
				@include ('video/delete_video')
			</div>
		@else 
			<div class="thumbnail">
				<img class="img-responsive" src="{{ asset('uploaded_photos/'.$article->photo->photo_src) }}">
				@if($article->user_id == Auth::user()->id)
					<div class="thumbnail_nav">
						<nav class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" id="actions_dd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							    <span class="glyphicon glyphicon-chevron-down"></span>
						    </button>
						  	<ul class="dropdown-menu" aria-labelledby="actions_dd">
							    <li><a data-toggle="modal" data-target="#edit_photo{{ $article->id }}">Edit</a></li>
							    <li><a data-toggle="modal" data-target="#delete_photo{{ $article->id }}">Delete</a></li>    
						  	</ul>
					  	</nav>
					</div>
				@endif
				<div class="caption">
					<p>{!! html_entity_decode($article->photo->caption) !!}</p>
				</div>
				@include ('photo/edit_photo')
				@include ('photo/delete_photo')
			</div>
		@endif
		@if(count($article->comments))
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4>Comments: </h4>
				</div>
				<div class="panel-body">
					@foreach($article->comments as $comment)
						<div class="media">
							<div class="media-left">
								<img class="media-object comment_avatar" src="{{ asset('img/'.$comment->owner->profile->avatar_src) }}">
							</div>
							<div class="media-body">
								<h4 class="media-heading">{{ $comment->owner->name }} <span class="comment_time">Posted on: {{ $comment->datetime }}</span></h4>
								<p class="comment_content">{{ $comment->content }}</p>
								@if($comment->user_id == Auth::user()->id)
									<a href="#" data-toggle="modal" data-target="#edit_comment{{$comment->id}}">Edit</a> | 
									@include ('comment/edit')
									<a href="#" data-toggle="modal" data-target="#delete_comment{{$comment->id}}">Delete</a> |
									@include ('comment/delete')
								@endif
									<a href="#" data-toggle="modal" data-target="#add_reply{{ $comment->id }}">Reply</a>
									@include ('reply/create_reply')
								@foreach($comment->replies as $reply)
								<div class="media">
									<div class="media-left">
										<img class="media-object reply_avatar" src='{{ asset("img/".$reply->reply_owner->profile->avatar_src) }}'>
									</div>
									<div class="media-body">
										<h4 class="media-heading">{{ $reply->reply_owner->name }} <span class="reply_time">Posted on: {{ $reply->datetime }}</span></h4>
										<p class="reply_content">{{ $reply->reply_content }}</p>
										@if($reply->user_id == Auth::user()->id)
											<div>
												<a href="#" data-toggle="modal" data-target="#edit_reply{{$reply->id}}">Edit</a> |
												@include('reply/edit')
												<a href="#" data-toggle="modal" data-target="#delete_reply{{$reply->id}}">Delete</a>
												@include('reply/delete')
											</div>
										@endif
									</div>
								</div>
								@endforeach
							</div>
						</div>
						<hr>
					@endforeach
				</div>
			</div>
		@endif
		<form class="form-group" method="POST" action='{{ url("feed/$article->id/comment") }}'>
			{{ csrf_field() }}
			<div class="form-group">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4>Leave a comment: </h4>
					</div>
					<div class="panel-body">
						<textarea class="form-control" name="comment" rows="5"></textarea>
						<br>
						<button class="pull-right btn btn-sm btn-success" type="submit">Post</button>
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