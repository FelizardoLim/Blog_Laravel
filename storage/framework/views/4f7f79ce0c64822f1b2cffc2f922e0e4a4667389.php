<?php $__env->startSection('content'); ?>
	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4>Pending Requests: </h4>
			</div>
			<div class="panel-body">
				<?php $__currentLoopData = $pending_request; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="row">
						<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img class="img-responsive" src="<?php echo e(asset('img/'.$request->profile->avatar_src)); ?>">
						</div>
						<div class="col-xs-4 content_middle">
							<a href='<?php echo e(url("request/$request->id")); ?>'><?php echo e($request->name); ?></a>
							<p>Wants to follow your Blog. </p>
						</div>
						<div class="col-xs-4 col-sm-3 col-sm-offset-1 content_middle">
							<a href='<?php echo e(url("approve_request/$request->id")); ?>'><button class="btn btn-sm btn-success">Accept&nbsp;</button></a>
							<a href='<?php echo e(url("decline_request/$request->id")); ?>'><button class="btn btn-sm btn-danger">Decline</button></a>
						</div>
					</div>
					<br>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>