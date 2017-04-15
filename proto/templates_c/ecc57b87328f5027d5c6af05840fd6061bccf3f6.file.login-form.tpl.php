<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 11:31:16
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/user/login-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59560195058f1f674d8a138-84699494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecc57b87328f5027d5c6af05840fd6061bccf3f6' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/user/login-form.tpl',
      1 => 1492252203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59560195058f1f674d8a138-84699494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f1f674d90a36_77934766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f1f674d90a36_77934766')) {function content_58f1f674d90a36_77934766($_smarty_tpl) {?><div class="enter-info">
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
