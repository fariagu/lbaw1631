<?php /* Smarty version Smarty-3.1.15, created on 2017-04-03 09:07:34
         compiled from "/opt/lbaw/lbaw1631/public_html/lbaw1631/frmk/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205576066258e202c68151a8-91703994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b09f29217c5772faaf235cbc4d8074d5a408dcaa' => 
    array (
      0 => '/opt/lbaw/lbaw1631/public_html/lbaw1631/frmk/templates/common/menu_logged_out.tpl',
      1 => 1491206098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205576066258e202c68151a8-91703994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58e202c6822ce3_10175415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e202c6822ce3_10175415')) {function content_58e202c6822ce3_10175415($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
