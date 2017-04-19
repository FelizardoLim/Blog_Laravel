@extends('layouts.app')

@section('content')
	@if(Session::has('message'))
		<p class="alert alert-success">{{ Session::get('message') }}</p>
	@endif
	<div class="col-sm-7 col-sm-offset-1">
		<div class="media">
			<div class="media-left">
				<img class="media-object user_avatar" src="{{ asset('img/'.Auth::user()->profile->avatar_src) }}" alt="">
			</div>
			<div class="media-body">
				<nav>
					<div class="panel panel-default">
						<div class="panel-body">
							<ul class="nav navbar-nav">
								<li><a class="glyphicon glyphicon-book" aria-hidden="true" data-toggle="modal" data-target="#create_article"></a></li>
								@include ('article/create')
								<li><a class="glyphicon glyphicon-picture" aria-hidden="true" href="#"></a></li>
								<li><a class="glyphicon glyphicon-facetime-video" aria-hidden="true" href="#"></a></li>
								<li><a class="glyphicon glyphicon-cloud" aria-hidden="true" href="#"></a></li>
							</ul>
						</div>
					</div>
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
					<div class="panel panel-default">
						<div class="panel-heading">
							<p><a href='{{ url("feed/$article->id") }}'>{{ $article->title }}</a></p>
						</div>
						<div class="panel-body">
							{!! html_entity_decode($article->content) !!}
						</div>
					</div>
					@endforeach
				</div>
			</div>
		@endif
		@endforeach
	</div>
	<!-- main right -->
	<div class="col-sm-3">
		<h4>Trending Blogs</h4>
		<p>Sample text Sample text Sample text Sa</p>
	</div>
@endsection