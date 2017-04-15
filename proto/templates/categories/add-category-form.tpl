<div class="enter-info">
	<div class="row">
		<h2 id="topic-title">Add category:</h2>
	</div>
    <form class="form-horizontal" id="register-form" action="{$BASE_URL}actions/categories/add.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="title">Name:</label>
			<input name="name" type="text" class="form-control" id="title" placeholder="Enter the category name">
		</div>
		<div class="form-group">
			<label for="question">Description:</label>
			<textarea name="description" class="form-control" rows="5" id="question" placeholder="Describe the new category"></textarea>
		</div>
        <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>