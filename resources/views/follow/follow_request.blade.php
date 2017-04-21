@extends('layouts.app')

@section('content')
	<h4>Pending Requests: </h4>
	@foreach($pending_request as $request)
		
		<p>{{ $request->id }}</p>
		<p>{{ $request->name }}</p>
		<!-- <p>{{ $request->profile->avatar_src }}</p> -->

		<a href='{{ url("approve_request/$request->id") }}'><button class="btn btn-sm btn-success">Accept</button></a>
		<a href='{{ url("decline_request/$request->id") }}'><button class="btn btn-sm btn-danger">Decline</button></a>

	@endforeach
@endsection