<?php /* Smarty version Smarty-3.1.15, created on 2017-04-12 18:13:21
         compiled from "C:\xampp\htdocs\lbaw1631\frmk\templates\common\menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186263335858ee52218f6ca1-03623298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3edee9d4cca05db95653ac6f70c0c506247f05a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\frmk\\templates\\common\\menu_logged_out.tpl',
      1 => 1492009994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186263335858ee52218f6ca1-03623298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58ee52218fa662_75774990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ee52218fa662_75774990')) {function content_58ee52218fa662_75774990($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
