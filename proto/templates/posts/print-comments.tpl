{function print_correct margin=0 }
	{if $answer}
		<div class="panel panel-default" id="correctAnswer" style="margin-left:{$margin}px">
			<a href="{$BASE_URL}pages/user/profile.php?id={$answer.m_id}" class="list-group-item">{$answer.username}</a>
			<div class="panel-body">{$answer.description}</div>
		</div>
		{if $answer.comments}
		  {call print_comments answers=$answer.comments margin=$margin+50}
		{/if}
	{/if}
{/function}

{function print_comments margin=0 }
  {foreach $answers as $answer}
	<div class="panel panel-default" id="answerComment" style="margin-left:{$margin}px">
		<a href="{$BASE_URL}pages/user/profile.php?id={$answer.m_id}" class="list-group-item">{$answer.username}</a>
		<div class="panel-body">{$answer.description}</div>
	</div>
	{if $answer.comments}
      {call print_comments answers=$answer.comments margin=$margin+50}
    {/if}
  {/foreach}
{/function}