<div id="for-margin-purposes">
    <div id="question-space" class="container-fluid">
        <h1>{$question.title}</h1>
        <div>
            <p>{$question.rating} votes</p>
            <a href="{$BASE_URL}pages/user/profile.php?id={$question.id_author}" class="list-group-item">{$question.author_name}</a>
			<a href="{$BASE_URL}pages/categories/category.php?id={$question.id_category}" class="list-group-item">{$question.category_name}</a>
        </div>
		<p id="question-body">{$question.description}</p>
    </div>    
</div>

<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title">Answers</h2>
				{include file='posts/print-comments.tpl'}
				{call print_correct answer=$correct}
				{call print_comments answers=$answers}
				{if $USER_ID}
					<div class="form-group" id="answerForm">
						<label for="question">Answer:</label>
						<textarea name="answer" class="form-control" rows="5" id="answerText"></textarea>
					</div>
					<button type="submit" id="answer" class="btn btn-default">Post</button>
				{/if}
			</div>
		</div>
	</div>
</div>