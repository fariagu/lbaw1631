<?php /* Smarty version Smarty-3.1.15, created on 2017-04-16 17:28:35
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\posts\question-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85119251458f0ce9e7be188-69637342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4e12dd2c0f2dc20b3df2dc5b5e9a56c543b52e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\posts\\question-info.tpl',
      1 => 1492270143,
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
				<div class="panel panel-default" id="correctAnswer">
					<a href="../profile" class="list-group-item">homesblouse</a>
					<div class="panel-body">You could replace that "int data[] = new int[10]" by "int data[]". You are wasting memory there</div>
				</div>
				<div class="panel panel-default" id="answerComment">
					<a href="../profile" class="list-group-item">airhost</a>
					<div class="panel-body">I agree!</div>
				</div>
				<div class="panel panel-default" id="answerComment">
					<a href="../profile" class="list-group-item">gritlumpish</a>
					<div class="panel-body">Good solution!</div>
				</div>
				<div class="panel panel-default" id="answerComment2">
					<a href="../profile" class="list-group-item">fellowbawd</a>
					<div class="panel-body">Thanks</div>
				</div>
				<div class="panel panel-default" id="answerComment">
					<a href="../profile" class="list-group-item">ferrariswimmer</a>
					<div class="panel-body">I agree!</div>
				</div>
				<div class="panel panel-default">
					<a href="../profile" class="list-group-item">bobbyvanilla</a>
					<div class="panel-body">Example :

int [] points = new int[]{ 1,2,3,4 };</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
