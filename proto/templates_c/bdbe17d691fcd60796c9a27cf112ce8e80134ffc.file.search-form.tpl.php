<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 21:18:18
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\posts\search-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117191136158f0fe754d7da7-08821682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdbe17d691fcd60796c9a27cf112ce8e80134ffc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\posts\\search-form.tpl',
      1 => 1496085494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117191136158f0fe754d7da7-08821682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0fe754d9943_54605690',
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0fe754d9943_54605690')) {function content_58f0fe754d9943_54605690($_smarty_tpl) {?><div class="enter-info">
	<div class="row">
		<h2 id="topic-title">Search:</h2>
	</div>
    <form class="form-horizontal" id="register-form">
		<div class="form-group">
			<label for="search">Search:</label>
			<input type="text" class="form-control" id="search" placeholder="Search for a question" autofocus>
		</div>
		<div class="form-group">
			<label for="sel1">Category:</label>
			<select class="form-control" id="sel1">
				<option>Any</option>
				<span style="display: none;">
					<option style="display: none;">0</option>
				</span>
                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
					<option><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
					<span style="display: none;">
						<option style="display: none;"><?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
</option>
					</span>
                <?php } ?>
			</select>
			<label class="checkbox-inline"><input type="checkbox" value="" id="answeredOnly">Answered</label>
		</div>
		<div class="form-group">
			<label for="sel1">Sort by:</label>
			<select class="form-control" id="sel2">
				<option>Most answers</option>
				<option>Most votes</option>
			</select>
		</div>
        <button type="submit" class="btn btn-default searchButton">Search</button>
	</form>
</div><?php }} ?>
