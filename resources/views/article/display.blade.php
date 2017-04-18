@extends('layouts.app')

@section('content')
	@if(Session::has('message'))
		<p>{{ Session::get('message') }}</p>
	@endif
	<div class="col-sm-6 col-sm-offset-1">
		<div class="media">
			<div class="media-left">
				<img class="media-object user_avatar" src="{{ asset('img/'.Auth::user()->profile->avatar_src) }}" alt="">
			</div>
			<div class="media-body">
				<nav>
					<ul class="nav navbar-nav">
						<li><a class="glyphicon glyphicon-book" aria-hidden="true" data-toggle="modal" data-target="#create_article"></a></li>
						@include ('article/create')
						<li><a class="glyphicon glyphicon-picture" aria-hidden="true" href="#"></a></li>
						<li><a class="glyphicon glyphicon-facetime-video" aria-hidden="true" href="#"></a></li>
						<li><a class="glyphicon glyphicon-cloud" aria-hidden="true" href="#"></a></li>
					</ul>
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
						<p><a href='{{ url("feed/$article->id") }}'>{{ $article->title }}</a></p>
						<p>{{ $article->content }}</p>
					@endforeach
				</div>
			</div>
		@endif
		@endforeach
	</div>
	<!-- main right -->
	<div class="col-sm-3 col-sm-offset-1">
		<h4>Trending Blogs</h4>
		<p>Sample text Sample text Sample text Sa</p>
	</div>
@endsection