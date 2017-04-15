<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 23:20:39
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/admin/admin-options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13267329958f29cb7794399-52770035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76ecc4495ea1a10b176aee505f5030368b247e56' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/admin/admin-options.tpl',
      1 => 1492292998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13267329958f29cb7794399-52770035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f29cb7798036_64270031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f29cb7798036_64270031')) {function content_58f29cb7798036_64270031($_smarty_tpl) {?><div id="page-content-wrapper">
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
