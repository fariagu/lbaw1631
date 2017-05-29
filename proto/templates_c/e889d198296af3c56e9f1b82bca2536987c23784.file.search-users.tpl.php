<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 02:11:18
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\management\search-users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1134338180592b616a281846-28563251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e889d198296af3c56e9f1b82bca2536987c23784' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\management\\search-users.tpl',
      1 => 1496016656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1134338180592b616a281846-28563251',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592b616a284329_19273937',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592b616a284329_19273937')) {function content_592b616a284329_19273937($_smarty_tpl) {?><div class="enter-info">
	<div class="row">
		<h2 id="topic-title">Search Users:</h2>
	</div>
    <form class="form-horizontal" id="register-form">
		<div class="form-group">
			<label for="search">Search:</label>
			<input type="text" class="form-control" id="search" placeholder="Search for a user" autofocus>
		</div>
        <button type="submit" class="btn btn-default searchUsers">Search</button>
	</form>
</div><?php }} ?>
