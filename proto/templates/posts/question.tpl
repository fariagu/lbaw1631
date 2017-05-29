{include file='common/header.tpl'}
{include file='common/navbar.tpl'}
{include file='common/sideNavbar.tpl'}
{include file='posts/question-info.tpl'}
<script>
question_id = {$question_id};
profile_id = {$USER_ID};
username = "{$USERNAME}";
</script>
<script src="{$BASE_URL}javascript/posts/question.js"></script>
{include file='common/confirmationModal.tpl'}
{include file='common/footer.tpl'}