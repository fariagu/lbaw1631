<?php /* Smarty version Smarty-3.1.15, created on 2017-05-28 23:15:10
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\categories\add-category-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57158368958f2515070fee7-03295101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca20c3c7dccb71c775e1d6d4fb477bea2b5e9a7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\categories\\add-category-form.tpl',
      1 => 1495734446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57158368958f2515070fee7-03295101',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f25150718168_78702041',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f25150718168_78702041')) {function content_58f25150718168_78702041($_smarty_tpl) {?><div class="enter-info">
	<div class="row">
		<h2 id="topic-title">Add category:</h2>
	</div>
    <form class="form-horizontal" id="register-form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/categories/add.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="title">Name:</label>
			<input name="name" type="text" class="form-control" id="title" placeholder="Enter the category name" autofocus>
		</div>
		<div class="form-group">
			<label for="question">Description:</label>
			<textarea name="description" class="form-control" rows="5" id="question" placeholder="Describe the new category"></textarea>
		</div>
        <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div><?php }} ?>
