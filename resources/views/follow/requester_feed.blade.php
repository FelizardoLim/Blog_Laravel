@extends('layouts.app')

@section('content')
	<div class="col-sm-8 col-sm-offset-2">
		<div class="panel panel-default">
		<div class="panel-body">
		<div class="media">
			<div class="media-left">
				<img class="media-object requester_avatar" src="{{ asset('img/'.$user->profile->avatar_src) }}">
			</div>
			<div class="media-body requester_details">
				<h4>{{ $user->name }}</h4>
				<p>Wants to follow your Blog.</p>
			</div>
		</div>
		</div>
		</div>
	</div>
	@foreach($user->articles as $article)
		<div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3> {{ $article->title }} </h3>
                </div>
                <div class="panel-body">
                    <p> {!! html_entity_decode($article->content) !!} </p>
                </div>
            </div>
        </div>
	@endforeach
@endsection