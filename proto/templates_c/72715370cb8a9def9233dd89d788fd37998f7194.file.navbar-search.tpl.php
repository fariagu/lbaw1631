<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 22:27:01
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/common/navbar-search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41510811558f0ed5a62e129-95472926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72715370cb8a9def9233dd89d788fd37998f7194' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/common/navbar-search.tpl',
      1 => 1496093189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41510811558f0ed5a62e129-95472926',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0ed5a631b07_25717584',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0ed5a631b07_25717584')) {function content_58f0ed5a631b07_25717584($_smarty_tpl) {?><form class="navbar-form navbar-right" data-toggle="collapse" data-target=".navbar-collapse.in" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/posts/search-question.php">
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Search" name="search" >
	</div>
	<button type="submit" class="btn btn-default">Search</button>
</form><?php }} ?>
