<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 13:40:13
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\user\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49928317258f0d9098ffa48-34782934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0cda675ee4e6d9d2325c2c94e3b0d7f42a3c1af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\user\\profile.tpl',
      1 => 1496058010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49928317258f0d9098ffa48-34782934',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0d9099912b7_32542873',
  'variables' => 
  array (
    'ADMIN' => 0,
    'profile' => 0,
    'profile_id' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0d9099912b7_32542873')) {function content_58f0d9099912b7_32542873($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/sideNavbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (!$_smarty_tpl->tpl_vars['ADMIN']->value&&$_smarty_tpl->tpl_vars['profile']->value['banned']) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('user/profile-banned.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ('user/profile-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<script>profile_id = <?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
</script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/user/profile.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
