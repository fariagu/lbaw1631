<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 00:31:40
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\posts\search-results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:271489816592b2abc4763c4-56850960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b40be7dc0d00dfb7168be9c0c035159b9806f0b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\posts\\search-results.tpl',
      1 => 1496005985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271489816592b2abc4763c4-56850960',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592b2abc484c95_24090101',
  'variables' => 
  array (
    'category' => 0,
    'search_results' => 0,
    'BASE_URL' => 0,
    'question' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592b2abc484c95_24090101')) {function content_592b2abc484c95_24090101($_smarty_tpl) {?><div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h2>
				<div class="list-group">
					<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search_results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/posts/question.php?id=<?php echo $_smarty_tpl->tpl_vars['question']->value['q_id'];?>
" class="list-group-item">
							<p><?php echo $_smarty_tpl->tpl_vars['question']->value['title'];?>
</p>
							<div>
								<p><?php echo $_smarty_tpl->tpl_vars['question']->value['score'];?>
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
