<?php $__env->startSection('content'); ?>

<div class="col-xs-12 col-sm-6 col-sm-offset-3">
	<div class="upload_div">
		<?php if(Session::has('message')): ?>
			<p class="alert alert-success text-center"><?php echo e(Session::get('message')); ?></p>
		<?php endif; ?>
		<div class="panel panel-default">
			<div class="panel-body">
				<form method="POST" action="/upload_avatar" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>