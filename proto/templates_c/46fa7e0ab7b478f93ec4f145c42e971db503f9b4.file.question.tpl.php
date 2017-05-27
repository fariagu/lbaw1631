<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 19:12:31
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\posts\question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21454338058f0ce64065017-66206825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46fa7e0ab7b478f93ec4f145c42e971db503f9b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\posts\\question.tpl',
      1 => 1495905090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21454338058f0ce64065017-66206825',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0ce640dd837_13770815',
  'variables' => 
  array (
    'question_id' => 0,
    'USER_ID' => 0,
    'USERNAME' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0ce640dd837_13770815')) {function content_58f0ce640dd837_13770815($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/sideNavbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('posts/question-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script>
question_id = <?php echo $_smarty_tpl->tpl_vars['question_id']->value;?>
;
profile_id = <?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
;
username = "<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
";
</script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/posts/question.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
