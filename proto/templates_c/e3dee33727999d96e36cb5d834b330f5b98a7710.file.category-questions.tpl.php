<?php /* Smarty version Smarty-3.1.15, created on 2017-05-14 18:10:54
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/categories/category-questions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150740252258f0f4f425bc60-31490226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3dee33727999d96e36cb5d834b330f5b98a7710' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/categories/category-questions.tpl',
      1 => 1494781315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150740252258f0f4f425bc60-31490226',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0f4f42645c7_45812065',
  'variables' => 
  array (
    'category' => 0,
    'questions' => 0,
    'BASE_URL' => 0,
    'question' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0f4f42645c7_45812065')) {function content_58f0f4f42645c7_45812065($_smarty_tpl) {?><div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h2>
				<div class="list-group">
					<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/posts/question.php?id=<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
" class="list-group-item">
							<p><?php echo $_smarty_tpl->tpl_vars['question']->value['title'];?>
</p>
							<div>
								<p><?php echo $_smarty_tpl->tpl_vars['question']->value['rating'];?>
 votes</p>
							</div>
						</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
