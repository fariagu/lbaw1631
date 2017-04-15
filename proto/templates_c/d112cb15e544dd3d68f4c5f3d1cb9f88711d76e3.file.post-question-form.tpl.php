<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 23:15:50
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/posts/post-question-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177240679058f29b96df7596-39909952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd112cb15e544dd3d68f4c5f3d1cb9f88711d76e3' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/posts/post-question-form.tpl',
      1 => 1492292998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177240679058f29b96df7596-39909952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f29b96dfc940_60008623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f29b96dfc940_60008623')) {function content_58f29b96dfc940_60008623($_smarty_tpl) {?><div class="enter-info">
	<div class="row">
		<h2 id="topic-title">Post a question:</h2>
	</div>
    <form class="form-horizontal" id="register-form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/posts/new-question.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="title">Title:</label>
			<input type="text" class="form-control" id="title" placeholder="Enter your question title">
		</div>
		<div class="form-group">
			<label for="question">Question:</label>
			<textarea class="form-control" rows="5" id="question"></textarea>
		</div>
		<div class="form-group">
			<label for="sel1">Category:</label>
			<select class="form-control" id="sel1">
				<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
					<option><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
				<?php } ?>
			</select>
		</div>
        <button type="submit" class="btn btn-default">Post</button>
	</form>
</div><?php }} ?>
