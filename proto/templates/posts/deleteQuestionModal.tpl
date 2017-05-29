<div class="modal fade" id="deleteQuestionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer" >
				<form class="form-horizontal" id="register-form" method="post" enctype="multipart/form-data" action="{$BASE_URL}actions/posts/delete-question.php">
					<input name="id" style="display: none" type="text" class="form-control" value="{$question_id}">
					<button type="submit" class="btn btn-default deleteQuestionButton">Yes</button>
					<button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">No</span>
					</button>
				</form>
            </div>
        </div>
    </div>
</div>