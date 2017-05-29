{include file='common/header.tpl'}
{include file='common/navbar.tpl'}
{include file='common/sideNavbar.tpl'}
{if !$ADMIN && $profile.banned}
	{include file='user/profile-banned.tpl'}
{else}
	{include file='user/profile-info.tpl'}
{/if}
<script>profile_id = {$profile_id}</script>
<script src="{$BASE_URL}javascript/user/profile.js"></script>
{include file='common/footer.tpl'}