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
						<h4 class="media-heading">{{ $user->name }}</h4>
						<p>Wants to follow your Blog.</p>
					</div>
				</div>
			</div>
		</div>
		@foreach($user->sort_articles_from_latest() as $article)
		    @if(null===$article->photo && null===$article->video)
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4><a href='{{ url("feed/$article->id") }}'>{{ $article->title }}</a></h4>
		            </div>
		            <div class="panel-body">
		                <p> {!! html_entity_decode($article->content) !!} </p>
		            </div>
		        </div>
			@elseif(null!==$article->video)
	            <div class="thumbnail">
	                <div class="embed-responsive embed-responsive-16by9">
	                    <iframe width="560" height="315" src="http://www.youtube.com/embed/{{ $article->video->video_src }}" frameborder="0" allowfullscreen></iframe>
	                </div>
	                <div class="caption">
	                    <p><a href='{{ url("feed/$article->id") }}'>{!! html_entity_decode($article->video->video_caption) !!}</a></p>
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
@endsection