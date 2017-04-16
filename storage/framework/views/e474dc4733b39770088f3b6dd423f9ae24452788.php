<h4>Edit Existing Article</h4>
<form method="POST" action='<?php echo e(url("articles/{$article_to_edit->id}/edit")); ?>'>
	<?php echo e(csrf_field()); ?>

	<div>
		<label for="name">Title:</label>
		<input type="text" name="title" value='<?php echo e($article_to_edit->title); ?>'>
	</div>
	<br>
	<div>
		<label for="content">Content:</label>
		<textarea type="text" name="content"><?php echo e($article_to_edit->content); ?></textarea>
	</div>
	<br>
	<button type="submit">Submit</button>
</form>