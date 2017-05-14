<?php /* Smarty version Smarty-3.1.15, created on 2017-05-14 18:02:57
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/user/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29431846958f29b8aaff3e9-72695513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6c652cff5831c5bc4aa7809cfcc7428ad8d7457' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/user/login.tpl',
      1 => 1494781315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29431846958f29b8aaff3e9-72695513',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f29b8ab52eb6_71307492',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f29b8ab52eb6_71307492')) {function content_58f29b8ab52eb6_71307492($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/sideNavbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('user/login-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
