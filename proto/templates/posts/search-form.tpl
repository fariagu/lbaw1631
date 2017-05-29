<div class="enter-info">
	<div class="row">
		<h2 id="topic-title">Search:</h2>
	</div>
    <form class="form-horizontal" id="register-form">
		<div class="form-group">
			<label for="search">Search:</label>
			<input type="text" class="form-control" id="search" placeholder="Search for a question" autofocus>
		</div>
		<div class="form-group">
			<label for="sel1">Category:</label>
			<select class="form-control" id="sel1">
				<option>Any</option>
				<span style="display: none;">
					<option style="display: none;">0</option>
				</span>
                {foreach $categories as $category}
					<option>{$category.name}</option>
					<span style="display: none;">
						<option style="display: none;">{$category.id}</option>
					</span>
                {/foreach}
			</select>
			<label class="checkbox-inline"><input type="checkbox" value="" id="answeredOnly">Answered</label>
		</div>
		<div class="form-group">
			<label for="sel1">Sort by:</label>
			<select class="form-control" id="sel2">
				<option>Most answers</option>
				<option>Most votes</option>
			</select>
		</div>
        <button type="submit" class="btn btn-default searchButton">Search</button>
	</form>
</div>