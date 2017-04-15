<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 18:48:49
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\admin\solve-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2028658258f24ef176f8b8-57096311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd33fcfa5fee70448610be50ca153752f3d763756' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\admin\\solve-form.tpl',
      1 => 1492274896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2028658258f24ef176f8b8-57096311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'reported_member' => 0,
    'reported_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f24ef1776aa9_92216059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f24ef1776aa9_92216059')) {function content_58f24ef1776aa9_92216059($_smarty_tpl) {?><div class="enter-info">
	<div class="row">
		<h2 id="topic-title">Solve report:</h2>
	</div>
    <form class="form-horizontal" id="register-form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/solve.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id_member" value="<?php echo $_smarty_tpl->tpl_vars['reported_member']->value;?>
">
		<input type="hidden" name="id_post" value="<?php echo $_smarty_tpl->tpl_vars['reported_post']->value;?>
">
		<div class="form-group">
			<label for="question">Solution:</label>
			<textarea name="solution" class="form-control" rows="5" id="question" placeholder="Provide your solution to this report"></textarea>
		</div>
        <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div><?php }} ?>
