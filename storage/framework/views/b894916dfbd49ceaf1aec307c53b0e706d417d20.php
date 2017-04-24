<?php $__env->startSection('content'); ?>
	<div class="col-sm-7 col-sm-offset-1">
		<div class="media">
			<div class="media-left">
				<img class="media-object user_avatar" src="<?php echo e(asset('img/'.Auth::user()->profile->avatar_src)); ?>" alt="">
			</div>
			<div class="media-body">
				<nav>
					<div class="panel panel-default">
						<div class="panel-body">
							<ul class="nav navbar-nav">
								<li class="secondary_nav">
									<a data-toggle="modal" data-target="#create_article">
										<i class="glyphicon glyphicon-pencil" aria-hidden="true"></i>
										<p>Text</p>
									</a>
								</li>
								<?php echo $__env->make('article/create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
								<li class="secondary_nav">
									<a data-toggle="modal" data-target="#create_photo">
										<i class="glyphicon glyphicon-picture" aria-hidden="true"></i>
										<p>Photo</p>
									</a>
								</li>
								<?php echo $__env->make('photo/photo_upload', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
								<li class="secondary_nav">
									<a>
										<i class="glyphicon glyphicon-facetime-video" aria-hidden="true"></i>
										<p>Video</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<?php if(Session::has('message')): ?>
			<p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
		<?php endif; ?>
		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>




<?php $__currentLoopData = $user->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php echo e($photo->photo_src); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




		<?php if(count($user->articles)): ?>
			<div class="media">
				<div class="media-left">
					<img class="media-object user_avatar" src="<?php echo e(asset('img/'.$user->profile->avatar_src)); ?>">
				</div>
				<div class="media-body">
					<?php $__currentLoopData = $user->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="panel panel-default">
						<div class="panel-heading">
							<p><a href='<?php echo e(url("feed/$article->id")); ?>'><?php echo e($article->title); ?></a></p>
						</div>
						<div class="panel-body">
							<?php echo html_entity_decode($article->content); ?>

						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<!-- main right -->
	<div class="col-sm-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h5>Recommended Blogs</h5>
			</div>
			<div class="panel-body">
			<?php $__currentLoopData = $notFriends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recommended): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="media">
					<div class="media-left">
						<img class="media-object recommended_avatar" src="<?php echo e(asset('img/'.$recommended->profile->avatar_src)); ?>">
					</div>
					<div class="media-body">					
						<div class="row">
							<div class="col-xs-8 recommended_details">
								<?php echo e($recommended->name); ?>

							</div>
							<div class="col-xs-4 recommended_details text-right">
								<a href='<?php echo e(url("feed/$recommended->id/follow")); ?>'>
									<span class="glyphicon glyphicon-plus"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>