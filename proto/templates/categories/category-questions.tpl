<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title">{$category.name}</h2>
				<div class="list-group">
					{foreach $questions as $question}
						<a href="{$BASE_URL}pages/posts/question.php?id={$question.id_question}" class="list-group-item">
							<p>{$question.title}</p>
							<div>
								<p>{$question.counter} answers</p>
								<p>{$question.rating} votes</p>
							</div>
						</a>
					{/foreach}
				</div>
			</div>
		</div>
	</div>
</div>