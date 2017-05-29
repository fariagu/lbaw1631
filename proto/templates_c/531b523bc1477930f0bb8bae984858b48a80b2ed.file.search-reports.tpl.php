<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 19:32:57
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\admin\search-reports.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119534242592c5b49c752c5-70985998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '531b523bc1477930f0bb8bae984858b48a80b2ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\admin\\search-reports.tpl',
      1 => 1496055649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119534242592c5b49c752c5-70985998',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592c5b49c846a2_50270899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c5b49c846a2_50270899')) {function content_592c5b49c846a2_50270899($_smarty_tpl) {?><div class="enter-info">
    <div class="row">
        <h2 id="topic-title">Search Reports:</h2>
    </div>
    <form class="form-horizontal" id="register-form">
        <div class="form-group">
            <label for="search">Search:</label>
            <input type="text" class="form-control" id="search" placeholder="Search for a report" autofocus>
        </div>
        <button type="submit" class="btn btn-default searchReports">Search</button>
    </form>
</div><?php }} ?>
