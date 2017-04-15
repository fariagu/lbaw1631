<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 14:40:39
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\user\login-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134023766958f0c9dd2e4d92-84906527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb8731a15de2555c9791d2c37f5a0790e5fe78cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\user\\login-form.tpl',
      1 => 1492259950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134023766958f0c9dd2e4d92-84906527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0c9dd2e61e4_26863087',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0c9dd2e61e4_26863087')) {function content_58f0c9dd2e61e4_26863087($_smarty_tpl) {?><div class="enter-info">
    <form class="form-horizontal" id="login-form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/user/login.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username:</label>
                <div class="col-sm-10">
                    <input name="username" type="text" class="form-control" id="username" placeholder="Enter username">
                </div>
          </div>
          <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="pwd" placeholder="Enter password">
                </div>
          </div>
		  <div class="list-group">
				<a href="#" class="list-group-item" id="forgotPassword">Forgot your password?</a>
		  </div>
          <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Login</button>
                </div>
          </div>
    </form>
</div>
<?php }} ?>
