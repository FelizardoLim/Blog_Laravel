@extends('layouts.app')

@section('content')
	<h4>Pending Requests: </h4>
	@foreach($pending_request as $request)
		<div class="media">
			<div class="media-left">
				<img class="media-object follow_avatar" src="{{ asset('img/'.$request->profile->avatar_src) }}">
			</div>
			<div class="media-body">
				<p>{{ $request->id }}</p>
				<p>{{ $request->name }}</p>
			</div>
		</div>
		<a href='{{ url("approve_request/$request->id") }}'><button class="btn btn-sm btn-success">Accept</button></a>
		<a href='{{ url("decline_request/$request->id") }}'><button class="btn btn-sm btn-danger">Decline</button></a>
	@endforeach
@endsection