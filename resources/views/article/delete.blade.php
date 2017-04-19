<!-- Delete Modal -->
	<div id='delete_article' class='modal fade' role='dialog'>
		<div class='modal-dialog'>
			<div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal'>&times;</button>
					<h3 class='modal-title'>Delete $name</h3>
				</div>
				<div class='modal-body'>
					<h4>Are you sure?</h4>
					<p>Proceeding with this action would completely erase all data tied to this post.</p>
					<p>Please review the details carefully before completing this action as changes done afterwards would be irreversible.</p>
				</div>
				<div class='modal-footer'>
					<button type='button' class='btn btn-sm btn-default' data-dismiss='modal'>Close</button>
					<a href='{{ url("articles/$article->id/delete") }}'><button type'submit' class='btn btn-sm btn-danger' name='delete'>Yes! Delete this Item</button></a>
				</div>
			</div>
		</div>
	</div>
<!-- Delete Modal -->