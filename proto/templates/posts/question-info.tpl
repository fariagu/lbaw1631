<div id="for-margin-purposes">
    <div id="question-space" class="container-fluid">
        <h1>{$question.title}</h1>
        <div>
            <p class="rating">{$question.rating} votes</p>
            <a href="{$BASE_URL}pages/user/profile.php?id={$question.id_author}" class="list-group-item">{$question.author_name}</a>
			{if $question.id_category}
				<a href="{$BASE_URL}pages/categories/category.php?id={$question.id_category}" class="list-group-item">{$question.category_name}</a>
			{/if}
			{if $USER_ID}
				{if $USER_ID != $question.id_author}
					<button type="button" class="btn btn-default report question" data-toggle="modal" data-target="#reportModal">Report</button>
				{/if}
				{if $question.value == -1}
					<button class="btn btn-default glyphicon glyphicon-thumbs-down disliked question"></button>
				{else}
					<button class="btn btn-default glyphicon glyphicon-thumbs-down dislike question"></button>
				{/if}
				{if $question.value == 1}
					<button class="btn btn-default glyphicon glyphicon-thumbs-up liked question"></button>
				{else}
					<button class="btn btn-default glyphicon glyphicon-thumbs-up like question"></button>
				{/if}
			{/if}
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
				{call print_correct answer=$correct user=$USER_ID}
				{call print_comments answers=$answers user=$USER_ID}
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