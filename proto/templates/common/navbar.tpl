{include file='common/navbar-left.tpl'}

{if $USERNAME}
	{include file='common/navbar-center.tpl'}
	{if $ADMIN}
		{include file='common/admin.tpl'}
	{/if}
{else}
	{include file='common/navbar-center-visitor.tpl'}
{/if}

{include file='common/navbar-search.tpl'}
{include file='common/navbar-right.tpl'}