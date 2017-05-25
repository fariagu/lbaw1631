<?php /* Smarty version Smarty-3.1.15, created on 2017-05-14 21:37:39
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\home\home-page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118547159258efa30672f419-81385442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2c38407d7e32eb05def8b155be8bd217f3ab4c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\home\\home-page.tpl',
      1 => 1494790571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118547159258efa30672f419-81385442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58efa306730948_52327314',
  'variables' => 
  array (
    'top_questions' => 0,
    'BASE_URL' => 0,
    'question' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58efa306730948_52327314')) {function content_58efa306730948_52327314($_smarty_tpl) {?>		<!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						<h2 id="topic-title">Top questions</h2>
						<div class="list-group">
							<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top_questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/posts/question.php?id=<?php echo $_smarty_tpl->tpl_vars['question']->value['id_question'];?>
" class="list-group-item">
									<p><?php echo $_smarty_tpl->tpl_vars['question']->value['title'];?>
</p>
									<div>
										<p><?php echo $_smarty_tpl->tpl_vars['question']->value['counter'];?>
 answers</p>
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
        <!-- /#page-content-wrapper --><?php }} ?>
