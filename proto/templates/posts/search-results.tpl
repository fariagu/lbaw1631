<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title">{$category.name}</h2>
				<div class="list-group">
					{foreach $search_results as $question}
						<a href="{$BASE_URL}pages/posts/question.php?id={$question.q_id}" class="list-group-item">
							<p>{$question.title}</p>
							<div>
								<p>{$question.score} votes</p>
							</div>
						</a>
					{/foreach}
				</div>
			</div>
		</div>
	</div>
</div>
