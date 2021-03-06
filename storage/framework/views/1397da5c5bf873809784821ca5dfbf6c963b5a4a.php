<div class="modal fade" id="edit_video<?php echo e($article->id); ?>" tabindex="-1" role="dialog" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Edit Video</h4>
			</div>
			<form method="POST" action='<?php echo e(url("feed/{$article->id}/edit_video")); ?>'>
				<div class="modal-body">
					<?php echo e(csrf_field()); ?>

					<div class="form-group">
						<label for="Video Source">Video Link</label>
						<input class="form-control" name="video_src" value="https://www.youtube.com/watch?v=<?php echo e($article->video->video_src); ?>">
					</div>
					<div class="form-group">
						<label for="Video Caption">Video Caption: </label>
						<textarea id="summernote<?php echo e($article->id); ?>" class="form-control" type="text" name="video_caption"><?php echo e($article->video->video_caption); ?></textarea>
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
    $('#summernote<?php echo e($article->id); ?>').summernote({
    	minHeight: 150,
    });
});
</script>