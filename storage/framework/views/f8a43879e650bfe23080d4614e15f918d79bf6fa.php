<?php $__env->startSection('content'); ?>
	<div class="col-sm-8 col-sm-offset-2">
		<div class="panel panel-default">
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
		<?php $__currentLoopData = $user->sort_articles_from_latest(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		    <?php if(null===$article->photo && null===$article->video): ?>
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4><a href='<?php echo e(url("feed/$article->id")); ?>'><?php echo e($article->title); ?></a></h4>
		            </div>
		            <div class="panel-body">
		                <p> <?php echo html_entity_decode($article->content); ?> </p>
		            </div>
		        </div>
			<?php elseif(null!==$article->video): ?>
	            <div class="thumbnail">
	                <div class="embed-responsive embed-responsive-16by9">
	                    <iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo e($article->video->video_src); ?>" frameborder="0" allowfullscreen></iframe>
	                </div>
	                <div class="caption">
	                    <p><a href='<?php echo e(url("feed/$article->id")); ?>'><?php echo html_entity_decode($article->video->video_caption); ?></a></p>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>