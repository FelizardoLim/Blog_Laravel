<div class="modal fade" id="edit_comment<?php echo e($comment->id); ?>" tabindex="-1" role="dialog" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Edit Comment</h4>
			</div>
			<form class="form-group" method="POST" action='<?php echo e(url("feed/{$comment->id}/edit_comment")); ?>'>
			<div class="modal-body">
				<?php echo e(csrf_field()); ?>

				<div class="form-group">
					<textarea class="form-control" type="text" name="comment" rows="7"><?php echo e($comment->content); ?></textarea>
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