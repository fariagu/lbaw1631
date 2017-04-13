<?php /* Smarty version Smarty-3.1.15, created on 2017-04-13 17:51:18
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\common\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116547668658ef9e764c6a71-13027809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d240811c1775c52fb489fa407ff799be105a7ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\common\\navbar.tpl',
      1 => 1492097918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116547668658ef9e764c6a71-13027809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USERNAME' => 0,
    'ADMIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58ef9e76515ae4_00496243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ef9e76515ae4_00496243')) {function content_58ef9e76515ae4_00496243($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/navbar-left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('common/navbar-center.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('common/admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ('common/navbar-center-visitor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar-search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar-right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
