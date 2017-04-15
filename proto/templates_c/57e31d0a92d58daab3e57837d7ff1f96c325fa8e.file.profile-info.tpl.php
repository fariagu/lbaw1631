<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 14:41:15
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\user\profile-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58803249558f0d916e1b6e6-44309226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57e31d0a92d58daab3e57837d7ff1f96c325fa8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\user\\profile-info.tpl',
      1 => 1492260072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58803249558f0d916e1b6e6-44309226',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0d916e25335_10881854',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'profile' => 0,
    'question' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0d916e25335_10881854')) {function content_58f0d916e25335_10881854($_smarty_tpl) {?><div id="for-margin-purposes">
    <div id="user-space" class="container-fluid">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['profile']->value['photo'];?>
" height="100" width="80">
        <h1><?php echo $_smarty_tpl->tpl_vars['profile']->value['username'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['email'];?>
</h1>
        <h2><?php echo $_smarty_tpl->tpl_vars['profile']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['lastname'];?>
</h2>
        <div>
            <p><?php echo $_smarty_tpl->tpl_vars['profile']->value['no_answers'];?>
 answers</p>
            <p><?php echo $_smarty_tpl->tpl_vars['profile']->value['no_questions'];?>
 questions</p>
            <p>score: <?php echo $_smarty_tpl->tpl_vars['profile']->value['score'];?>
</p>
        </div>
    </div>    
</div>

<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title">Recent Activity</h2>
				<div class="list-group">
					<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile']->value['questions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/posts/question.php?id=<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['question']->value['title'];?>
</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
