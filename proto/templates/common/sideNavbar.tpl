<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
				{foreach $categories as $category}
					<li>
						<a href="{$BASE_URL}pages/categories/category.php?id={$category.id}">{$category.name}</a>
					</li>
				{/foreach}
				<li>
                    <a href="{$BASE_URL}pages/categories/categories.php" id="viewAll">View all</a>
                </li>
            </ul>
        </div>
<!-- /#wrapper -->