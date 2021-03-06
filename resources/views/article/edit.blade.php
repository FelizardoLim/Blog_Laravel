<div class="modal fade" id="edit_article{{ $article->id }}" tabindex="-1" role="dialog" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Edit Feed</h4>
			</div>
			<form class="form-group" method="POST" action='{{ url("feed/{$article->id}/edit") }}'>
			<div class="modal-body">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="title">Title:</label>
						<input class="form-control" type="text" name="title" value='{{ $article->title }}'>
					</div>
					<div class="form-group">
						<label for="content">Content:</label>
						<textarea id="summernote{{ $article->id }}" class="form-control" type="text" name="content" rows="7">{{ $article->content }}</textarea>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
        		<button type="submit" class="btn btn-sm btn-success">Update</button>
			</div>
			</form>
		</div>
	</div>
</div>

<script>
$(document).ready(function() {
    $('#summernote{{ $article->id }}').summernote();
});
</script>