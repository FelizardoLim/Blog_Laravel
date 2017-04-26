@extends ('layouts/app')

@section ('content')

<div class="col-xs-12 col-sm-6 col-sm-offset-3">
	<div class="upload_div">
		@if(Session::has('message'))
			<p class="alert alert-success text-center">{{ Session::get('message') }}</p>
		@endif
		<div class="panel panel-default">
			<div class="panel-body">
				<form method="POST" action="/upload_avatar" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="avatar">Upload Profile Picture</label>
						<input class="form-control" type="file" name="avatar">
					</div>
					<div class="text-right">
						<button class="btn btn-sm btn-success" type="submit">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection