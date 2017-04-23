<?php $__env->startSection('content'); ?>
	<h4>Pending Requests: </h4>
	<?php $__currentLoopData = $pending_request; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="media">
			<div class="media-left">
				<img class="media-object follow_avatar" src="<?php echo e(asset('img/'.$request->profile->avatar_src)); ?>">
			</div>
			<div class="media-body">
				<p><?php echo e($request->id); ?></p>
				<p><?php echo e($request->name); ?></p>
			</div>
		</div>
		<a href='<?php echo e(url("approve_request/$request->id")); ?>'><button class="btn btn-sm btn-success">Accept</button></a>
		<a href='<?php echo e(url("decline_request/$request->id")); ?>'><button class="btn btn-sm btn-danger">Decline</button></a>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>