<?php $__env->startSection('content'); ?>
	<div class="col-sm-7 col-sm-offset-1">
		<?php if(Session::has('message')): ?>
			<p class="alert alert-success text-center"><?php echo e(Session::get('message')); ?></p>
		<?php endif; ?>
		<div class="media">
			<div class="media-left">
				<img class="media-object user_avatar" src="<?php echo e(asset('img/'.Auth::user()->profile->avatar_src)); ?>" alt="">
			</div>
			<div class="media-body">
				<nav class="secondary_nav_main">
					<ul class="nav navbar-nav">
						<li class="secondary_nav">
							<a data-toggle="modal" data-target="#create_article">
								<i class="glyphicon glyphicon-font" aria-hidden="true"></i>
								<p>Text</p>
							</a>
						</li>
						<?php echo $__env->make('article/create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<li class="secondary_nav">
							<a data-toggle="modal" data-target="#create_photo">
								<i class="glyphicon glyphicon-camera" aria-hidden="true"></i>
								<p>Photo</p>
							</a>
						</li>
						<?php echo $__env->make('photo/photo_upload', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<li class="secondary_nav">
							<a data-toggle="modal" data-target="#create_video">
								<i class="glyphicon glyphicon-facetime-video" aria-hidden="true"></i>
								<p>Video</p>
							</a>
						</li>
						<?php echo $__env->make('video/post_video', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</ul>
				</nav>
			</div>
		</div>

		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if(count($user->articles)): ?>
				<div class="media">
					<div class="media-left">
						<img class="media-object user_avatar" src="<?php echo e(asset('img/'.$user->profile->avatar_src)); ?>">
					</div>
					<div class="media-body">
						<?php $__currentLoopData = $user->sort_articles_from_latest(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if(null===$article->photo && null===$article->video): ?>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4><a href='<?php echo e(url("feed/$article->id")); ?>'><?php echo e($article->title); ?></a></h4>
									</div>
									<div class="panel-body">
										<?php echo html_entity_decode($article->content); ?>

									</div>
								</div>
							<?php elseif(null!==$article->video): ?>
							<div class="thumbnail">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo e($article->video->video_src); ?>" frameborder="0" allowfullscreen></iframe>
								</div>
								<div class="caption">
									<a href='<?php echo e(url("feed/$article->id")); ?>'><p><?php echo html_entity_decode($article->video->video_caption); ?></p></a>
								</div>
							</div>
							<?php else: ?> 
								<div class="thumbnail">
									<a href='<?php echo e(url("feed/$article->id")); ?>'>
										<img class="img-responsive" src="<?php echo e(asset('uploaded_photos/'.$article->photo->photo_src)); ?>">
									</a>
									<div class="caption">
										<p><?php echo html_entity_decode($article->photo->caption); ?></p>
									</div>
								</div>
							<?php endif; ?>
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
				<h5 class="std_text_color">Recommended Blogs</h5>
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