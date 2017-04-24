<?php $__env->startSection('content'); ?>
	<div class="col-sm-8 col-sm-offset-2">
		<div class="panel panel-primary">
			<div class="panel-body">
				<div class="media">
					<div class="media-left">
						<img class="media-object requester_avatar" src="<?php echo e(asset('img/'.$user->profile->avatar_src)); ?>">
					</div>
					<div class="media-body requester_details">
						<h4 class="media-heading"><?php echo e($user->name); ?></h4>
						<p>Wants to follow your Blog.</p>
					</div>
				</div>
			</div>
		</div>
		<?php $__currentLoopData = $user->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3> <?php echo e($article->title); ?> </h3>
            </div>
            <div class="panel-body">
                <p> <?php echo html_entity_decode($article->content); ?> </p>
            </div>
        </div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>