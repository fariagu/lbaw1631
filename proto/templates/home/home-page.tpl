		<!-- Page Content -->
		{if $SUCCESS_MESSAGES}
			<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Success!</strong>   {$SUCCESS_MESSAGES}.
			</div>
		{/if}
			
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						<h2 id="topic-title">Top questions</h2>
						<div class="list-group">
							{foreach $top_questions as $question}
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
        <!-- /#page-content-wrapper -->