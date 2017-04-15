<?php /* Smarty version Smarty-3.1.15, created on 2017-04-16 01:05:01
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\posts\post-question-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77437148558f2179d7a8cd5-32814215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d73c99a4aa7311b9a71338fe1163231cecd8cf7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\posts\\post-question-form.tpl',
      1 => 1492297497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77437148558f2179d7a8cd5-32814215',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f2179d7ab6c7_17294927',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f2179d7ab6c7_17294927')) {function content_58f2179d7ab6c7_17294927($_smarty_tpl) {?><div class="enter-info">
	<div class="row">
		<h2 id="topic-title">Post a question:</h2>
	</div>
    <form class="form-horizontal" id="register-form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/posts/new-question.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="title">Title:</label>
			<input name="title" type="text" class="form-control" id="title" placeholder="Enter your question title">
		</div>
		<div class="form-group">
			<label for="question">Question:</label>
			<textarea name="question" class="form-control" rows="5" id="question"></textarea>
		</div>
		<div class="form-group">
			<label for="sel1">Category:</label>
			<select name="sel1" class="form-control" id="sel1">
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
