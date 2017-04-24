<!-- Reply Modal -->
<div class="modal fade" id="add_reply<?php echo e($comment->id); ?>" tabindex="-1" role="dialog" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Create New Reply</h4>
			</div>
			<form class="form-group" method="POST" action='<?php echo e(url("feed/$comment->id/reply")); ?>'>
			<div class="modal-body">
				<?php echo e(csrf_field()); ?>

				<div class="form-group">
					<textarea class="form-control" type="text" name="reply" rows="7"></textarea>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
        		<button type="submit" class="btn btn-sm btn-success">Save</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- Reply Modal End -->