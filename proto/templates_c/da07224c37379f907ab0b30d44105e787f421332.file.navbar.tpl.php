<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 22:52:31
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/common/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142421440758f0ed5a559b86-18874394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da07224c37379f907ab0b30d44105e787f421332' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/common/navbar.tpl',
      1 => 1492292998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142421440758f0ed5a559b86-18874394',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0ed5a567378_22507490',
  'variables' => 
  array (
    'USERNAME' => 0,
    'ADMIN' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0ed5a567378_22507490')) {function content_58f0ed5a567378_22507490($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/navbar-left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('common/navbar-center.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('common/navbar-admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ('common/navbar-center-visitor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar-search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar-right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
