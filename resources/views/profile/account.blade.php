@extends ('layouts/app')

@section ('content')

<div class="col-xs-12 col-sm-6 col-sm-offset-3">
	<div class="panel panel-default upload_div">
		<div class="panel-body">
			<form method="POST" action="/upload_avatar" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="avatar">Upload Profile Picture</label>
					<input class="form-control" type="file" name="avatar">
				</div>
				<button class="btn btn-sm btn-success" type="submit">Save</button>
			</form>
		</div>
	</div>
</div>

@endsection