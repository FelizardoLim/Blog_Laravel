@extends('layouts.app')

@section('content')
	<div class="col-sm-7 col-sm-offset-1">
		@if(Session::has('message'))
			<p class="alert alert-success">{{ Session::get('message') }}</p>
		@endif
		<div class="media">
			<div class="media-left">
				<img class="media-object user_avatar" src="{{ asset('img/'.Auth::user()->profile->avatar_src) }}" alt="">
			</div>
			<div class="media-body">
				<nav>
<!-- 					<div class="panel panel-default">
						<div class="panel-body"> -->
							<ul class="nav navbar-nav">
								<li class="secondary_nav">
									<a data-toggle="modal" data-target="#create_article">
										<i class="glyphicon glyphicon-pencil" aria-hidden="true"></i>
										<p>Text</p>
									</a>
								</li>
								@include ('article/create')
								<li class="secondary_nav">
									<a data-toggle="modal" data-target="#create_photo">
										<i class="glyphicon glyphicon-picture" aria-hidden="true"></i>
										<p>Photo</p>
									</a>
								</li>
								@include ('photo/photo_upload')
								<li class="secondary_nav">
									<a data-toggle="modal" data-target="#create_video">
										<i class="glyphicon glyphicon-facetime-video" aria-hidden="true"></i>
										<p>Video</p>
									</a>
								</li>
								@include ('video/post_video')
							</ul>
		<!-- 				</div>
					</div> -->
				</nav>
			</div>
		</div>
		@foreach($users as $user)
			@if(count($user->articles))
				<div class="media">
					<div class="media-left">
						<img class="media-object user_avatar" src="{{ asset('img/'.$user->profile->avatar_src) }}">
					</div>
					<div class="media-body">
						@foreach($user->articles as $article)
							@if(null===$article->photo && null===$article->video)
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4><a href='{{ url("feed/$article->id") }}'>{{ $article->title }}</a></h4>
									</div>
									<div class="panel-body">
										{!! html_entity_decode($article->content) !!}
									</div>
								</div>
							@elseif(null!==$article->video)
							<div class="thumbnail">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe width="560" height="315" src="{{ $article->video->video_src }}" frameborder="0" allowfullscreen></iframe>
								</div>
								<div class="caption">
									<a href='{{ url("feed/$article->id") }}'><p>{!! html_entity_decode($article->video->video_caption) !!}</p></a>
								</div>
							</div>
							@else 
								<div class="thumbnail">
									<a href='{{ url("feed/$article->id") }}'>
										<img class="img-responsive" src="{{ asset('uploaded_photos/'.$article->photo->photo_src) }}">
									</a>
									<div class="caption">
										<p>{!! html_entity_decode($article->photo->caption) !!}</p>
									</div>
								</div>
							@endif
						@endforeach
					</div>
				</div>
			@endif
		@endforeach
	</div>
	<!-- main right -->
	<div class="col-sm-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h5>Recommended Blogs</h5>
			</div>
			<div class="panel-body">
			@foreach($notFriends as $recommended)
				<div class="media">
					<div class="media-left">
						<img class="media-object recommended_avatar" src="{{ asset('img/'.$recommended->profile->avatar_src) }}">
					</div>
					<div class="media-body">					
						<div class="row">
							<div class="col-xs-8 recommended_details">
								{{ $recommended->name }}
							</div>
							<div class="col-xs-4 recommended_details text-right">
								<a href='{{ url("feed/$recommended->id/follow") }}'>
									<span class="glyphicon glyphicon-plus"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
@endsection