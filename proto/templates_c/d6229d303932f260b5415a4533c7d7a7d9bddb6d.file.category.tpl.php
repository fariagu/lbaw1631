<?php /* Smarty version Smarty-3.1.15, created on 2017-05-14 18:10:54
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/categories/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154303437658f0f4f41896d1-43327636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6229d303932f260b5415a4533c7d7a7d9bddb6d' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/categories/category.tpl',
      1 => 1494781315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154303437658f0f4f41896d1-43327636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0f4f4207b09_39977485',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0f4f4207b09_39977485')) {function content_58f0f4f4207b09_39977485($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/sideNavbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('categories/category-questions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
