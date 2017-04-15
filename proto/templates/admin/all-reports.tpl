<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title">Reports</h2>
				<div class="list-group">
					{foreach $reports as $report}
						<a href="{$BASE_URL}pages/admin/report.php?id_member={$report.id_member}&id_post={$report.id_post}" class="list-group-item">{$report.description}</a>
					{/foreach}
				</div>
			</div>
		</div>
	</div>
</div>