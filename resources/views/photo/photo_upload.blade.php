<div class="modal fade" id="create_photo" tabindex="-1" role="dialog" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Post Photo</h4>
			</div>
			<form method="POST" action="/upload_photo" enctype="multipart/form-data">
				<div class="modal-body">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="photo">Photo: </label>
						<input class="form-control" type="file" name="photo">
					</div>
					<div class="form-group">
						<label for="caption">Caption: </label>
						<textarea id="summernote_caption" class="form-control" type="text" name="caption"></textarea>
					</div>
				</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
        		<button type="submit" class="btn btn-sm btn-success">Post</button>
			</div>
			</form>
		</div>
	</div>
</div>

<script>
$(document).ready(function() {
    $('#summernote_caption').summernote({
    	minHeight: 150,
    });
});
</script>