<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 17:51:51
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\management\all-users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99940624358f240731aa675-87872751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b67deb33aedee82fcfce31f2bf7eaa3b47c8954' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\management\\all-users.tpl',
      1 => 1492271507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99940624358f240731aa675-87872751',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f240731acd84_59657486',
  'variables' => 
  array (
    'profiles' => 0,
    'BASE_URL' => 0,
    'profile' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f240731acd84_59657486')) {function content_58f240731acd84_59657486($_smarty_tpl) {?><div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title">All users</h2>
				<div class="list-group">
					<?php  $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->key => $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->_loop = true;
?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['profile']->value['id'];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['profile']->value['username'];?>
</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
