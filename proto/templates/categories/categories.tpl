<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title">All categories</h2>
				<div class="list-group">
					{foreach $categories as $category}
						{if $ADMIN}
							<a id="{$category.id}" href="{$BASE_URL}pages/categories/category.php?id={$category.id}" class="list-group-item categoryItem" style="display: inline-block; width: 95%">{$category.name}</a>
							<button class="btn btn-default glyphicon glyphicon-remove deleteCategory"></button>
						{else}
							<a id="{$category.id}" href="{$BASE_URL}pages/categories/category.php?id={$category.id}" class="list-group-item categoryItem">{$category.name}</a>
						{/if}
					{/foreach}
				</div>
			</div>
		</div>
	</div>
</div>