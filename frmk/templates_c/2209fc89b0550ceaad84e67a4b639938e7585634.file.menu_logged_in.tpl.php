<?php /* Smarty version Smarty-3.1.15, created on 2017-04-12 18:20:55
         compiled from "C:\xampp\htdocs\lbaw1631\frmk\templates\common\menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137481475458ee53e733f206-30003448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2209fc89b0550ceaad84e67a4b639938e7585634' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\frmk\\templates\\common\\menu_logged_in.tpl',
      1 => 1492009994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137481475458ee53e733f206-30003448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58ee53e7376bf8_77527073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ee53e7376bf8_77527073')) {function content_58ee53e7376bf8_77527073($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
<span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>
<?php }} ?>
