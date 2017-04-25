<?php $__env->startSection('content'); ?>	
	<div class="col-sm-7 col-sm-offset-1">
		<?php if(Session::has('message')): ?>
			<p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
		<?php endif; ?>
		<?php if(null===$article->photo && null===$article->video): ?>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-10">
							<h3> <?php echo e($article->title); ?> </h3>
						</div>
						<?php if($article->user_id == Auth::user()->id): ?>
						<div class="col-xs-2">
							<nav class="dropdown text-right">
								<button class="btn btn-default dropdown-toggle" type="button" id="actions_dd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								    <span class="glyphicon glyphicon-chevron-down"></span>
							    </button>
							  	<ul class="dropdown-menu" aria-labelledby="actions_dd">
								    <li><a data-toggle="modal" data-target="#edit_article<?php echo e($article->id); ?>">Edit</a></li>
								    <li><a data-toggle="modal" data-target="#delete_article<?php echo e($article->id); ?>">Delete</a></li>    
							  	</ul>
						  	</nav>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<!-- for edit / delete feed modals -->
				<?php echo $__env->make('article/edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php echo $__env->make('article/delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<div class="panel-body">
					<p> <?php echo html_entity_decode($article->content); ?> </p>
				</div>
			</div>
		<?php elseif(null!==$article->video): ?>
			<div class="thumbnail">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="<?php echo e($article->video->video_src); ?>" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="caption">
					<p><?php echo html_entity_decode($article->video->video_caption); ?></p>
					<?php if($article->user_id == Auth::user()->id): ?>
						<div class="thumbnail_nav">
							<nav class="dropdown">
								<button class="btn btn-default dropdown-toggle" type="button" id="actions_dd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								    <span class="glyphicon glyphicon-chevron-down"></span>
							    </button>
							  	<ul class="dropdown-menu" aria-labelledby="actions_dd">
								    <li><a data-toggle="modal" data-target="#edit_video<?php echo e($article->id); ?>">Edit</a></li>
								    <li><a data-toggle="modal" data-target="#delete_video<?php echo e($article->id); ?>">Delete</a></li>  
							  	</ul>
						  	</nav>
						</div>
					<?php endif; ?>
				</div>
				<?php echo $__env->make('video/edit_video', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php echo $__env->make('video/delete_video', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		<?php else: ?> 
			<div class="thumbnail">
				<img class="img-responsive" src="<?php echo e(asset('uploaded_photos/'.$article->photo->photo_src)); ?>">
				<?php if($article->user_id == Auth::user()->id): ?>
					<div class="thumbnail_nav">
						<nav class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" id="actions_dd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							    <span class="glyphicon glyphicon-chevron-down"></span>
						    </button>
						  	<ul class="dropdown-menu" aria-labelledby="actions_dd">
							    <li><a data-toggle="modal" data-target="#edit_photo<?php echo e($article->id); ?>">Edit</a></li>
							    <li><a data-toggle="modal" data-target="#delete_photo<?php echo e($article->id); ?>">Delete</a></li>    
						  	</ul>
					  	</nav>
					</div>
				<?php endif; ?>
				<div class="caption">
					<p><?php echo html_entity_decode($article->photo->caption); ?></p>
				</div>
				<?php echo $__env->make('photo/edit_photo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php echo $__env->make('photo/delete_photo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		<?php endif; ?>
		<?php if(count($article->comments)): ?>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4>Comments: </h4>
				</div>
				<div class="panel-body">
					<?php $__currentLoopData = $article->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="media">
							<div class="media-left">
								<img class="media-object comment_avatar" src="<?php echo e(asset('img/'.$comment->owner->profile->avatar_src)); ?>">
							</div>
							<div class="media-body">
								<h4 class="media-heading"><?php echo e($comment->owner->name); ?> <span class="comment_time">Posted on: <?php echo e($comment->datetime); ?></span></h4>
								<p class="comment_content"><?php echo e($comment->content); ?></p>
								<?php if($comment->user_id == Auth::user()->id): ?>
									<a href="#" data-toggle="modal" data-target="#edit_comment<?php echo e($comment->id); ?>">Edit</a> | 
									<?php echo $__env->make('comment/edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
									<a href="#" data-toggle="modal" data-target="#delete_comment<?php echo e($comment->id); ?>">Delete</a> |
									<?php echo $__env->make('comment/delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
								<?php endif; ?>
									<a href="#" data-toggle="modal" data-target="#add_reply<?php echo e($comment->id); ?>">Reply</a>
									<?php echo $__env->make('reply/create_reply', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
								<?php $__currentLoopData = $comment->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="media">
									<div class="media-left">
										<img class="media-object reply_avatar" src='<?php echo e(asset("img/".$reply->reply_owner->profile->avatar_src)); ?>'>
									</div>
									<div class="media-body">
										<h4 class="media-heading"><?php echo e($reply->reply_owner->name); ?> <span class="reply_time">Posted on: <?php echo e($reply->datetime); ?></span></h4>
										<p class="reply_content"><?php echo e($reply->reply_content); ?></p>
										<?php if($reply->user_id == Auth::user()->id): ?>
											<div>
												<a href="#" data-toggle="modal" data-target="#edit_reply<?php echo e($reply->id); ?>">Edit</a> |
												<?php echo $__env->make('reply/edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
												<a href="#" data-toggle="modal" data-target="#delete_reply<?php echo e($reply->id); ?>">Delete</a>
												<?php echo $__env->make('reply/delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
											</div>
										<?php endif; ?>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						</div>
						<hr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		<?php endif; ?>
		<form class="form-group" method="POST" action='<?php echo e(url("feed/$article->id/comment")); ?>'>
			<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4>Leave a comment: </h4>
					</div>
					<div class="panel-body">
						<textarea class="form-control" name="comment" rows="5"></textarea>
						<br>
						<button class="pull-right btn btn-sm btn-success" type="submit">Post</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="col-sm-3">
		<div class="text-justify">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>