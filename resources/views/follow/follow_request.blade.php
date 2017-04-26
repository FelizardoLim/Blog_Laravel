@extends('layouts.app')

@section('content')
	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
		@if(Session::has('message'))
			<p class="alert alert-success text-center">{{ Session::get('message') }}</p>
		@endif
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="std_text_color">Pending Requests: </h4>
			</div>
			<div class="panel-body">
				@foreach($pending_request as $request)
					<div class="row">
						<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img class="img-responsive" src="{{ asset('img/'.$request->profile->avatar_src) }}">
						</div>
						<div class="col-xs-4 content_middle">
							<a href='{{ url("request/$request->id") }}'>{{ $request->name }}</a>
							<p>Wants to follow your Blog. </p>
						</div>
						<div class="col-xs-4 col-sm-3 col-sm-offset-1 content_middle">
							<a href='{{ url("decline_request/$request->id") }}'><button class="btn btn-sm btn-danger">Decline</button></a>
							<a href='{{ url("approve_request/$request->id") }}'><button class="btn btn-sm btn-success">Accept&nbsp;</button></a>
						</div>
					</div>
					<br>
				@endforeach
			</div>
		</div>
	</div>
@endsection