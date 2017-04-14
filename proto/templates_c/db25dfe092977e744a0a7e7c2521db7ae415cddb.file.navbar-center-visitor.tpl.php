<?php /* Smarty version Smarty-3.1.15, created on 2017-04-14 16:40:10
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/common/navbar-center-visitor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13076542758f0ed5a5f4f96-95271262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db25dfe092977e744a0a7e7c2521db7ae415cddb' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/common/navbar-center-visitor.tpl',
      1 => 1492183391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13076542758f0ed5a5f4f96-95271262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0ed5a5f8392_95923077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0ed5a5f8392_95923077')) {function content_58f0ed5a5f8392_95923077($_smarty_tpl) {?><ul class="nav navbar-nav navbar-right">
	<li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/register.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
	<li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
</ul><?php }} ?>
