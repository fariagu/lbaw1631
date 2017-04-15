<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 12:55:19
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/user/edit-profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86593465258f20a27abbef7-18818023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2c07d98f07488d2bedb92d98555ac54b43bc382' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/user/edit-profile.tpl',
      1 => 1492257288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86593465258f20a27abbef7-18818023',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f20a27ac8cf5_85136238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f20a27ac8cf5_85136238')) {function content_58f20a27ac8cf5_85136238($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/sideNavbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('user/edit-profile-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
