<div id="for-margin-purposes">
    <div id="user-space" class="container-fluid">
        <img src="{$BASE_URL}{$profile.photo}" height="100" width="80">
        <h1>{$profile.username}/{$profile.email}</h1>
        <h2>{$profile.firstname} {$profile.lastname}</h2>
        <div>
            <p>{$profile.no_answers} answers</p>
            <p>{$profile.no_questions} questions</p>
            <p>score: {$profile.score}</p>
			{if $ADMIN && !$pubadmin}
				<a href="" id="give_privileges" class="list-group-item">Give admin privileges</a>
			{/if}
        </div>
    </div>    
</div>

<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title">Recent Activity</h2>
				<div class="list-group">
					{foreach $profile.questions as $question}
						<a href="{$BASE_URL}pages/posts/question.php?id={$question.id}" class="list-group-item">{$question.title}</a>
					{/foreach}
				</div>
			</div>
		</div>
	</div>
</div>