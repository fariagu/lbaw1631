<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 14:30:59
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\categories\categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42423160158f0c0c08bc6d2-36158494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff11eb6496f4be4954be352e351933f0f1754dd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\categories\\categories.tpl',
      1 => 1496060997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42423160158f0c0c08bc6d2-36158494',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0c0c0913d42_44174279',
  'variables' => 
  array (
    'categories' => 0,
    'ADMIN' => 0,
    'category' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0c0c0913d42_44174279')) {function content_58f0c0c0913d42_44174279($_smarty_tpl) {?><div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title">All categories</h2>
				<div class="list-group">
					<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
							<a id="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/categories/category.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="list-group-item categoryItem" style="display: inline-block; width: 95%"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
							<button class="btn btn-default glyphicon glyphicon-remove deleteCategory" data-toggle="modal" data-target="#confirmationModal"></button>
						<?php } else { ?>
							<a id="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/categories/category.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="list-group-item categoryItem"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
						<?php }?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
