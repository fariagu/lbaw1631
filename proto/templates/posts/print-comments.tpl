{function print_correct margin=0 }
	{if $answer.a_id}
		<div class="panel panel-default" id="correctAnswer" style="margin-left:{$margin}px">
			<a href="{$BASE_URL}pages/user/profile.php?id={$answer.a_id}" class="list-group-item">{$answer.username}</a>
			<div class="panel-body">{$answer.description}
				{if $user}
					<button style="display: none" class="btn btn-default glyphicon glyphicon-remove closeComment" />
					<button type="submit" class="btn btn-default reply">Reply</button>
					<textarea style="display: none" name="answer" class="form-control commentText" rows="5"></textarea>
					<button style="display: none" type="submit" class="btn btn-default comment" hidden>Post</button>
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
				<button type="submit" class="btn btn-default reply">Reply</button>
				<textarea style="display: none" name="answer" class="form-control commentText" rows="5"></textarea>
				<button style="display: none" type="submit" class="btn btn-default comment" hidden>Post</button>
			{/if}
		</div>
	</div>
	{if $answer.comments}
      {call print_comments answers=$answer.comments user=$user margin=$margin+50}
    {/if}
  {/foreach}
{/function}