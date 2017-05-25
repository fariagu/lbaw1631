<div class="enter-info">
	<div class="row">
		<h2 id="topic-title">Post a question:</h2>
	</div>
    <form class="form-horizontal" id="register-form" action="{$BASE_URL}actions/posts/new-question.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="title">Title:</label>
			<input name="title" type="text" class="form-control" id="title" placeholder="Enter your question title" autofocus>
		</div>
		<div class="form-group">
			<label for="question">Question:</label>
			<textarea name="question" class="form-control" rows="5" id="question"></textarea>
		</div>
		<div class="form-group">
			<label for="sel1">Category:</label>
			<select name="sel1" class="form-control" id="sel1">
				{foreach $categories as $category}
					<option>{$category.name}</option>
				{/foreach}
			</select>
		</div>
        <button type="submit" class="btn btn-default">Post</button>
	</form>
</div>