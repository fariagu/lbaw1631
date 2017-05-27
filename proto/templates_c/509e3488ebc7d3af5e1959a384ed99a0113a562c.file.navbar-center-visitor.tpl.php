<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 19:12:24
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\common\navbar-center-visitor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150088657058ef9e7657c9b4-75266547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '509e3488ebc7d3af5e1959a384ed99a0113a562c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\common\\navbar-center-visitor.tpl',
      1 => 1495905090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150088657058ef9e7657c9b4-75266547',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58ef9e7657fa11_21638316',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ef9e7657fa11_21638316')) {function content_58ef9e7657fa11_21638316($_smarty_tpl) {?><ul class="nav navbar-nav navbar-right">
	<li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/register.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
	<li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
</ul><?php }} ?>
