<?php /* Smarty version Smarty-3.1.15, created on 2017-04-14 17:31:43
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/posts/search-question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158401027958f0f96fb00c04-55803871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8317c089ce01ebcab3b9620254ffc08fcbb16f5' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/posts/search-question.tpl',
      1 => 1492183391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158401027958f0f96fb00c04-55803871',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0f96fb7e2f4_84292211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0f96fb7e2f4_84292211')) {function content_58f0f96fb7e2f4_84292211($_smarty_tpl) {?><div class="enter-info">
	<div class="row">
		<h2 id="topic-title">Search:</h2>
	</div>
    <form class="form-horizontal" id="register-form">
		<div class="form-group">
			<label for="search">Search:</label>
			<input type="text" class="form-control" id="search" placeholder="Search for a question">
		</div>
		<div class="form-group">
			<label for="sel1">Category:</label>
			<select class="form-control" id="sel1">
				<option>Any</option>
				<option>Category 1</option>
				<option>Category 2</option>
				<option>Category 3</option>
				<option>Category 4</option>
				<option>Category 5</option>
				<option>Category 6</option>
				<option>Category 7</option>
				<option>Category 8</option>
				<option>Category 9</option>
				<option>Category 10</option>
				<option>Category 11</option>
				<option>Category 12</option>
				<option>Category 13</option>
			</select>
			<label class="checkbox-inline"><input type="checkbox" value="">Answered</label>
		</div>
		<div class="form-group">
			<label for="sel1">Sort by:</label>
			<select class="form-control" id="sel2">
				<option>Most answers</option>
				<option>Most votes</option>
				<option>Most recent</option>
			</select>
		</div>
        <button type="submit" class="btn btn-default">Search</button>
	</form>
</div><?php }} ?>
