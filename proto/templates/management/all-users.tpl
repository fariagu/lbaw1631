<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title">All users</h2>
				<div class="list-group">
					{foreach $profiles as $profile}
						<a href="{$BASE_URL}pages/user/profile.php?id={$profile.id}" class="list-group-item">{$profile.username}</a>
					{/foreach}
				</div>
			</div>
		</div>
	</div>
</div>