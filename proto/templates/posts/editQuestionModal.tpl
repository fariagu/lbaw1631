<!-- Modal -->
<div class="modal fade" id="editQuestionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Edit Question</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
			<div class="form-group">
				<label for="title">Title:</label>
				<input name="title" type="text" class="form-control" id="title" placeholder="Enter your question title" autofocus>
			</div>
			<div class="form-group">
				<label for="question">Question:</label>
				<textarea name="question" class="form-control" rows="5" id="question"></textarea>
			</div>
			<div class="form-group">
				<label for="sel1">Category:</label>
				<select name="sel1" class="form-control" id="sel1">
					{foreach $categories as $category}
						<option>{$category.name}</option>
					{/foreach}
				</select>
			</div>
			<div class="form-group">
				<label for="tags">Tags:</label>
				<textarea name="tags" class="form-control" rows="5" id="tags" placeholder="Separate each tag by a semicolon (;)"></textarea>
			</div>
		</form>
		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default editQuestionButton">Submit</button>
      </div>
    </div>
  </div>
</div>