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
				<div class="form-group" id="give_privileges">
					<div class="col-sm-offset-3 col-sm-8">
						{if $profile.banned}
							<button type="submit" class="btn btn-default unban">Unban</button>
						{else}
							<button type="submit" class="btn btn-default give_privileges">Give Admin Privileges</button>
							<button type="submit" class="btn btn-default ban">Ban</button>
						{/if}
					</div>
				</div>
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