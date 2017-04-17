@if(Session::has('message'))
	<p>{{ Session::get('message') }}</p>
@endif
@foreach($users as $user)
@if(count($user->articles))
	<div class="media">
		<div class="media-left">
			<img class="media-object user_avatar" src="{{ asset('img/placeholder.png') }}">
		</div>
		<div class="media-body">
			@foreach($user->articles as $article)
				<p><a href='{{ url("articles/$article->id") }}'>{{ $article->title }}</a></p>
				<p>{{ $article->content }}</p>
			@endforeach
		</div>
	</div>
@endif
@endforeach