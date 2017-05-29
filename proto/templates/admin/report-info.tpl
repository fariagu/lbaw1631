<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title">Report</h2>
				<div class="list-group">
					<div class="panel panel-default">
						<a href="{$BASE_URL}pages/user/profile.php?id={$reported_member.id}" class="list-group-item">{$reported_member.username}</a>
						<a href="{$BASE_URL}pages/posts/question.php?id={$reported_post.id}" class="list-group-item">{$reported_post.title}</a>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">{$report.description}</div>
					</div>
					<div class="panel panel-default">
						<a href="{$BASE_URL}pages/admin/solve.php?id_member={$reported_member.id}&id_post={$reported_post}" class="list-group-item">Solve</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>