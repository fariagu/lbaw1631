<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 22:52:31
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/home/home-page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40522084358f0ed5a6dcf83-08285428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f45591d0fe95e5c3965bdb5a1afe861eeb74834' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/home/home-page.tpl',
      1 => 1492292998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40522084358f0ed5a6dcf83-08285428',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0ed5a6e2741_09388335',
  'variables' => 
  array (
    'top_questions' => 0,
    'BASE_URL' => 0,
    'question' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0ed5a6e2741_09388335')) {function content_58f0ed5a6e2741_09388335($_smarty_tpl) {?>		<!-- Page Content -->
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
