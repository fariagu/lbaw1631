<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title">All categories</h2>
				<div class="list-group">
					{foreach $categories as $category}
						<a href="{$BASE_URL}pages/categories/category.php?id={$category.id}" class="list-group-item">{$category.name}</a>
					{/foreach}
				</div>
			</div>
		</div>
	</div>
</div>