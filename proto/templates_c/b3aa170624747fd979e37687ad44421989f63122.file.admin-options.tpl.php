<?php /* Smarty version Smarty-3.1.15, created on 2017-05-28 21:28:15
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\admin\admin-options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155100884858f23fb608ca37-00447274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3aa170624747fd979e37687ad44421989f63122' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\admin\\admin-options.tpl',
      1 => 1495905090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155100884858f23fb608ca37-00447274',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f23fb6092ae1_30708592',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f23fb6092ae1_30708592')) {function content_58f23fb6092ae1_30708592($_smarty_tpl) {?><div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title">Administration</h2>
				<div class="list-group">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/management/users.php" class="list-group-item">View all users</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/reports.php" class="list-group-item">View reports</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/categories/add.php" class="list-group-item">Add category</a>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
