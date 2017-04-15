<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 14:52:45
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\posts\post-question-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77437148558f2179d7a8cd5-32814215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d73c99a4aa7311b9a71338fe1163231cecd8cf7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\posts\\post-question-form.tpl',
      1 => 1492260669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77437148558f2179d7a8cd5-32814215',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f2179d7ab6c7_17294927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f2179d7ab6c7_17294927')) {function content_58f2179d7ab6c7_17294927($_smarty_tpl) {?><div class="enter-info">
	<div class="row">
		<h2 id="topic-title">Post a question:</h2>
	</div>
    <form class="form-horizontal" id="register-form">
		<div class="form-group">
			<label for="title">Title:</label>
			<input type="text" class="form-control" id="title" placeholder="Enter your question title">
		</div>
		<div class="form-group">
			<label for="question">Question:</label>
			<textarea class="form-control" rows="5" id="question"></textarea>
		</div>
		<div class="form-group">
			<label for="sel1">Category:</label>
			<select class="form-control" id="sel1">
				<option>java</option>
				<option>javascript</option>
				<option>c#</option>
				<option>php</option>
				<option>android</option>
				<option>jquery</option>
				<option>python</option>
				<option>html</option>
				<option>c++</option>
				<option>ios</option>
				<option>css</option>
				<option>mysql</option>
				<option>sql</option>
			</select>
		</div>
        <button type="submit" class="btn btn-default">Post</button>
	</form>
</div><?php }} ?>
