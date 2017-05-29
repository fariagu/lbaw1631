{include file='common/header.tpl'}
{include file='common/navbar.tpl'}
{include file='common/sideNavbar.tpl'}
{include file='categories/search-categories.tpl'}
{include file='categories/categories.tpl'}
{if $ADMIN}
    <script>var admin = true;</script>
{else}
    <script>var admin = false;</script>
{/if}
<script src="{$BASE_URL}javascript/categories/categories.js"></script>
{include file='common/footer.tpl'}