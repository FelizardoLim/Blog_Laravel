<?php $__env->startSection('content'); ?>	
	<div class="col-sm-7 col-sm-offset-1">
	<?php if(Session::has('message')): ?>
		<p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
	<?php endif; ?>
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
							    <li><a data-toggle="modal" data-target="#edit_article">Edit</a></li>
							    <li><a data-toggle="modal" data-target="#delete_article">Delete</a></li>    
						  	</ul>
					  	</nav>
					</div>
					<?php endif; ?>

				</div>
			</div>
			<?php echo $__env->make('article/edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php echo $__env->make('article/delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<div class="panel-body">
				<p> <?php echo html_entity_decode($article->content); ?> </p>
			</div>
		</div>
		<?php if(count($article->comments)): ?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Comments: </h4>
				</div>
				<div class="panel-body">
					<?php $__currentLoopData = $article->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="row">
							<div class="col-xs-6">
								<p>Comment Owner: <?php echo e($comment->owner->name); ?></p>
							</div>
							<div class="col-xs-6 text-right">
								<p>Posted Date: <?php echo e($comment->created_at); ?></p>
							</div>
						</div>
						<p>Comment:</p>
						<p><?php echo e($comment->content); ?></p>		

						<button class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#add_reply<?php echo e($comment->id); ?>">Reply</button>
						<?php echo $__env->make('reply/create_reply', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

						<?php $__currentLoopData = $comment->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="media">
								<div class="media-left">
									<img class="media-object reply_avatar" src='<?php echo e(asset("img/".$reply->reply_owner->profile->avatar_src)); ?>'>
								</div>
								<div class="media-body">
									<p><?php echo e($reply->reply_content); ?></p>
								</div>
							</div>
							<?php if($reply->user_id == Auth::user()->id): ?>
								<button class="btn btn-sm btn-default" data-toggle="modal" data-target="#edit_reply<?php echo e($reply->id); ?>">Edit</button>
								<?php echo $__env->make('reply/edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
								<button class="btn btn-sm btn-default" data-toggle="modal" data-target="#delete_reply<?php echo e($reply->id); ?>">Delete</button>
								<?php echo $__env->make('reply/delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
							<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- 							<script>
								$("#flip_reply<?php echo e($comment->id); ?>").click(function() {
									$("#panel_reply<?php echo e($comment->id); ?>").slideToggle("slow");
								});
							</script> -->

					<?php if($comment->user_id == Auth::user()->id): ?>
						<button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit_comment<?php echo e($comment->id); ?>">Edit</button>
						<?php echo $__env->make('comment/edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete_comment<?php echo e($comment->id); ?>">Delete</button>
						<?php echo $__env->make('comment/delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<?php endif; ?>
						<hr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		<?php endif; ?>
		<form class="form-group" method="POST" action='<?php echo e(url("feed/$article->id/comment")); ?>'>
			<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Leave a comment: </h4>
					</div>
					<div class="panel-body">
						<textarea class="form-control" name="comment" rows="5"></textarea>
						<br>
						<button class="pull-right btn btn-sm btn-success" type="submit">Submit</button>
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