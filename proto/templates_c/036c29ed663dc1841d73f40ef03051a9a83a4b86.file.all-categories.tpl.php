<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 14:30:59
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\categories\all-categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138837874958f0c0c06b7b19-49753741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '036c29ed663dc1841d73f40ef03051a9a83a4b86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\categories\\all-categories.tpl',
      1 => 1496060997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138837874958f0c0c06b7b19-49753741',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0c0c0863546_13372056',
  'variables' => 
  array (
    'ADMIN' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0c0c0863546_13372056')) {function content_58f0c0c0863546_13372056($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/sideNavbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('categories/search-categories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('categories/categories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
    <script>var admin = true;</script>
<?php } else { ?>
    <script>var admin = false;</script>
<?php }?>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/categories/categories.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ('common/confirmationModal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
