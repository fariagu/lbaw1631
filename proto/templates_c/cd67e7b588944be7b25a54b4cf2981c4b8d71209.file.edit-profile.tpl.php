<?php /* Smarty version Smarty-3.1.15, created on 2017-05-14 21:40:04
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\user\edit-profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144070806758f20c99054f72-40378941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd67e7b588944be7b25a54b4cf2981c4b8d71209' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\user\\edit-profile.tpl',
      1 => 1494790571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144070806758f20c99054f72-40378941',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f20c9910d840_70035157',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f20c9910d840_70035157')) {function content_58f20c9910d840_70035157($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/sideNavbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('user/edit-profile-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
