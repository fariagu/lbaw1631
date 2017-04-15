<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 17:46:59
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\management\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178091498258f240730f3754-35754731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a78568d7a7544459438c736119d88691998789c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\management\\users.tpl',
      1 => 1492271188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178091498258f240730f3754-35754731',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f2407314f158_32372153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f2407314f158_32372153')) {function content_58f2407314f158_32372153($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/sideNavbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('management/all-users.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
