<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 19:12:24
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\common\navbar-search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73831550558ef9e765a9ba3-78483859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6d7d8b93dc449977dbfcf35f59e93fcd632f729' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\common\\navbar-search.tpl',
      1 => 1495905090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73831550558ef9e765a9ba3-78483859',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58ef9e765abf47_49389146',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ef9e765abf47_49389146')) {function content_58ef9e765abf47_49389146($_smarty_tpl) {?><form class="navbar-form navbar-right" data-toggle="collapse" data-target=".navbar-collapse.in" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/posts/search-question.php">
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Search" >
	</div>
	<button type="submit" class="btn btn-default">Search</button>
</form><?php }} ?>
