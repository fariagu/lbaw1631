<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 18:48:43
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\admin\report-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83189343858f249ba2249f3-17500747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c889e971a83f1b25b6183b3df43fc2f38c82b3d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\admin\\report-info.tpl',
      1 => 1492274339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83189343858f249ba2249f3-17500747',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f249ba2315e9_67859981',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'reported_member' => 0,
    'reported_page' => 0,
    'report' => 0,
    'reported_post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f249ba2315e9_67859981')) {function content_58f249ba2315e9_67859981($_smarty_tpl) {?><div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title">Report</h2>
				<div class="list-group">
					<div class="panel panel-default">
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['reported_member']->value['id'];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['reported_member']->value['username'];?>
</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/posts/question.php?id=<?php echo $_smarty_tpl->tpl_vars['reported_page']->value['id'];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['reported_page']->value['title'];?>
</a>
					</div>
					<div class="panel panel-default">
						<div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['report']->value['description'];?>
</div>
					</div>
					<div class="panel panel-default">
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/solve.php?id_member=<?php echo $_smarty_tpl->tpl_vars['reported_member']->value['id'];?>
&id_post=<?php echo $_smarty_tpl->tpl_vars['reported_post']->value;?>
" class="list-group-item">Solve</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
