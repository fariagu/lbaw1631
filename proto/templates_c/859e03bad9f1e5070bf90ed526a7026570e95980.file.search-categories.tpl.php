<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 13:48:45
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\categories\search-categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1176641950592c0a9d404044-99447291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '859e03bad9f1e5070bf90ed526a7026570e95980' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\categories\\search-categories.tpl',
      1 => 1496057419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1176641950592c0a9d404044-99447291',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592c0a9d405c62_36365604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c0a9d405c62_36365604')) {function content_592c0a9d405c62_36365604($_smarty_tpl) {?><div class="enter-info">
    <div class="row">
        <h2 id="topic-title">Search Categories:</h2>
    </div>
    <form class="form-horizontal" id="register-form">
        <div class="form-group">
            <label for="search">Search:</label>
            <input type="text" class="form-control" id="search" placeholder="Search for a Category" autofocus>
        </div>
        <button type="submit" class="btn btn-default searchCategories">Search</button>
    </form>
</div><?php }} ?>
