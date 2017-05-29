<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 13:44:32
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\user\profile-banned.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1839391111592c09a073f215-95591199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ebe1f349687ed7cc8f8ab5c8fdb8b0aa0e5c14b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\user\\profile-banned.tpl',
      1 => 1496058123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1839391111592c09a073f215-95591199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'profile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592c09a07ace92_27997491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c09a07ace92_27997491')) {function content_592c09a07ace92_27997491($_smarty_tpl) {?><div id="for-margin-purposes">
    <div id="user-space" class="container-fluid">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['profile']->value['photo'];?>
" height="100" width="80">
        <h1><?php echo $_smarty_tpl->tpl_vars['profile']->value['username'];?>
</h1>
		<p id="question-body">This user is banned!</p>
    </div>    
</div><?php }} ?>
