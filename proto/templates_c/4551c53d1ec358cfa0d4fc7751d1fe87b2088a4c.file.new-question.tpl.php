<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 12:38:48
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/posts/new-question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15678952258f20648796ed1-89103646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4551c53d1ec358cfa0d4fc7751d1fe87b2088a4c' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/posts/new-question.tpl',
      1 => 1492256308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15678952258f20648796ed1-89103646',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f206487a4a11_08105541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f206487a4a11_08105541')) {function content_58f206487a4a11_08105541($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/sideNavbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('posts/post-question-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
