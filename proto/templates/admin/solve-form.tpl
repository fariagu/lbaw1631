<div class="enter-info">
	<div class="row">
		<h2 id="topic-title">Solve report:</h2>
	</div>
    <form class="form-horizontal" id="register-form" action="{$BASE_URL}actions/admin/solve.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id_member" value="{$reported_member}" autofocus>
		<input type="hidden" name="id_post" value="{$reported_post}">
		<div class="form-group">
			<label for="question">Solution:</label>
			<textarea name="solution" class="form-control" rows="5" id="question" placeholder="Provide your solution to this report"></textarea>
		</div>
        <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>