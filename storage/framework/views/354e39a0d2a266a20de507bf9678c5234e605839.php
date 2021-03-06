<!-- Edit Reply Start -->
<div class="modal fade" id="edit_reply<?php echo e($reply->id); ?>" tabindex="-1" role="dialog" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Edit Reply</h4>
			</div>
			<form class="form-group" method="POST" action='<?php echo e(url("feed/{$reply->id}/edit_reply")); ?>'>
			<div class="modal-body">
				<?php echo e(csrf_field()); ?>

				<div class="form-group">
					<textarea class="form-control" type="text" name="reply" rows="7"> <?php echo e($reply->reply_content); ?> </textarea>
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
<!-- Edit Reply Modal End -->