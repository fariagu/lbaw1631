<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 19:12:31
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\posts\question-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85119251458f0ce9e7be188-69637342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4e12dd2c0f2dc20b3df2dc5b5e9a56c543b52e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\posts\\question-info.tpl',
      1 => 1495905090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85119251458f0ce9e7be188-69637342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0ce9e863648_15911073',
  'variables' => 
  array (
    'question' => 0,
    'BASE_URL' => 0,
    'correct' => 0,
    'USER_ID' => 0,
    'answers' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0ce9e863648_15911073')) {function content_58f0ce9e863648_15911073($_smarty_tpl) {?><div id="for-margin-purposes">
    <div id="question-space" class="container-fluid">
        <h1><?php echo $_smarty_tpl->tpl_vars['question']->value['title'];?>
</h1>
        <div>
            <p><?php echo $_smarty_tpl->tpl_vars['question']->value['rating'];?>
 votes</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['question']->value['id_author'];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['question']->value['author_name'];?>
</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/categories/category.php?id=<?php echo $_smarty_tpl->tpl_vars['question']->value['id_category'];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['question']->value['category_name'];?>
</a>
        </div>
		<p id="question-body"><?php echo $_smarty_tpl->tpl_vars['question']->value['description'];?>
</p>
    </div>    
</div>

<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title">Answers</h2>
				<?php echo $_smarty_tpl->getSubTemplate ('posts/print-comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php smarty_template_function_print_correct($_smarty_tpl,array('answer'=>$_smarty_tpl->tpl_vars['correct']->value,'user'=>$_smarty_tpl->tpl_vars['USER_ID']->value));?>

				<?php smarty_template_function_print_comments($_smarty_tpl,array('answers'=>$_smarty_tpl->tpl_vars['answers']->value,'user'=>$_smarty_tpl->tpl_vars['USER_ID']->value));?>

				<?php if ($_smarty_tpl->tpl_vars['USER_ID']->value) {?>
					<div class="form-group" id="answerForm">
						<label for="question">Answer:</label>
						<textarea name="answer" class="form-control" rows="5" id="answerText"></textarea>
					</div>
					<button type="submit" id="answer" class="btn btn-default">Post</button>
				<?php }?>
			</div>
		</div>
	</div>
</div><?php }} ?>
