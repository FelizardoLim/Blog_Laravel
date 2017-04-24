<?php $__env->startSection('content'); ?>
    <div class="col-sm-8 col-sm-offset-2">
    <?php if(Session::has('message')): ?>
        <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
    <?php endif; ?>
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object requester_avatar" src="<?php echo e(asset('img/'.Auth::user()->profile->avatar_src)); ?>">
                    </div>
                    <div class="media-body requester_details">
                        <h4 class="media-heading"><?php echo e(Auth::user()->name); ?></h4>
                        <p>Welcome to my Blog. Enjoy reading!</p>
                    </div>
                </div>
            </div>
        </div>    
    <?php $__currentLoopData = Auth::user()->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>