{function print_correct margin=0 }
	{if $answer.a_id}
		<div class="panel panel-default" id="correctAnswer" style="margin-left:{$margin}px">
			<a href="{$BASE_URL}pages/user/profile.php?id={$answer.a_id}" class="list-group-item">{$answer.username}</a>
			<div class="panel-body">{$answer.description}
				{if $user}
					<button style="display: none" class="btn btn-default glyphicon glyphicon-remove closeComment" />
					{if $user != $answer.m_id}
						<button type="button" class="btn btn-default report" data-toggle="modal" data-target="#reportModal">Report</button>
					{/if}
					<button type="submit" class="btn btn-default reply">Reply</button>
					{if $answer.value == -1}
						<button class="btn btn-default glyphicon glyphicon-thumbs-down disliked"></button>
					{else}
						<button class="btn btn-default glyphicon glyphicon-thumbs-down dislike"></button>
					{/if}
					{if $answer.value == 1}
						<button class="btn btn-default glyphicon glyphicon-thumbs-up liked"></button>
					{else}
						<button class="btn btn-default glyphicon glyphicon-thumbs-up like"></button>
					{/if}
					<p class="rating correctRating">{$answer.rating} votes</p>
					<textarea style="display: none" name="answer" class="form-control commentText" rows="5"></textarea>
					<button style="display: none" type="submit" class="btn btn-default comment" id="{$answer.a_id}">Post</button>
				{/if}
			</div>
		</div>
		{if $answer.comments}
		  {call print_comments answers=$answer.comments user=$user margin=$margin+50}
		{/if}
	{/if}
{/function}

{function print_comments margin=0 }
  {foreach $answers as $answer}
	<div class="panel panel-default" id="answerComment" style="margin-left:{$margin}px">
		<a href="{$BASE_URL}pages/user/profile.php?id={$answer.m_id}" class="list-group-item">{$answer.username}</a>
		<div class="panel-body">{$answer.description}
			{if $user}
				<button style="display: none" class="btn btn-default glyphicon glyphicon-remove closeComment" />
				{if $user != $answer.m_id}
					<button type="button" class="btn btn-default report" data-toggle="modal" data-target="#reportModal">Report</button>
				{/if}
				<button type="submit" class="btn btn-default reply">Reply</button>
				{if $answer.value == -1}
					<button class="btn btn-default glyphicon glyphicon-thumbs-down disliked"></button>
				{else}
					<button class="btn btn-default glyphicon glyphicon-thumbs-down dislike"></button>
				{/if}
				{if $answer.value == 1}
					<button class="btn btn-default glyphicon glyphicon-thumbs-up liked"></button>
				{else}
					<button class="btn btn-default glyphicon glyphicon-thumbs-up like"></button>
				{/if}
				<p class="rating">{$answer.rating} votes</p>
				<textarea style="display: none" name="answer" class="form-control commentText" rows="5"></textarea>
				<button style="display: none" type="submit" class="btn btn-default comment" id="{$answer.a_id}">Post</button>
			{/if}
		</div>
	</div>
	{if $answer.comments}
      {call print_comments answers=$answer.comments user=$user margin=$margin+50}
    {/if}
  {/foreach}
{/function}

<!-- Modal -->
<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Report post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Reason:</label>
            <textarea class="form-control" id="report-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default reportButton">Submit</button>
      </div>
    </div>
  </div>
</div>