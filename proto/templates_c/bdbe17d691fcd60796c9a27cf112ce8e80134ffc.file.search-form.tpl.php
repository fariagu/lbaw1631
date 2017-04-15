<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 14:41:49
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\posts\search-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117191136158f0fe754d7da7-08821682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdbe17d691fcd60796c9a27cf112ce8e80134ffc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\posts\\search-form.tpl',
      1 => 1492259950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117191136158f0fe754d7da7-08821682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0fe754d9943_54605690',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0fe754d9943_54605690')) {function content_58f0fe754d9943_54605690($_smarty_tpl) {?><div class="enter-info">
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
