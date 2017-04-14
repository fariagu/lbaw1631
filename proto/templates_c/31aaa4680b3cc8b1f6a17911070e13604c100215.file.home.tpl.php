<?php /* Smarty version Smarty-3.1.15, created on 2017-04-14 16:40:10
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/home/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32935396458f0ed5a403ef9-78365060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31aaa4680b3cc8b1f6a17911070e13604c100215' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/home/home.tpl',
      1 => 1492183391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32935396458f0ed5a403ef9-78365060',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0ed5a4a5ee6_59197685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0ed5a4a5ee6_59197685')) {function content_58f0ed5a4a5ee6_59197685($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/sideNavbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('home/home-page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
