<?php $__env->startSection('content'); ?>

<div class="col-xs-6 col-xs-offset-3">
	<form method="POST" action="/upload_avatar" enctype="multipart/form-data">
		<?php echo e(csrf_field()); ?>

		<div class="form-group">
			<label for="avatar">Upload Avatar</label>
			<input class="form-control" type="file" name="avatar">
		</div>
		<button class="btn btn-sm btn-success" type="submit">Save Avatar</button>
	</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>