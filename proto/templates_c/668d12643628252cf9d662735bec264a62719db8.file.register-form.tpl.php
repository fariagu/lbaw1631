<?php /* Smarty version Smarty-3.1.15, created on 2017-04-14 17:29:54
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/user/register-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160466310858f0f9025557c3-39077783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '668d12643628252cf9d662735bec264a62719db8' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/user/register-form.tpl',
      1 => 1492183391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160466310858f0f9025557c3-39077783',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0f902559426_20725652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0f902559426_20725652')) {function content_58f0f902559426_20725652($_smarty_tpl) {?><div class="enter-info">
    <h1>Create New Account</h1>
    <form class="form-horizontal" id="register-form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/user/register.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
            <label class="control-label col-sm-2" for="username">Username:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder="Enter username">
            </div>
      </div>
      <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
      </div>
      <div class="form-group">
            <label class="control-label col-sm-2" for="pwd2">Confirm Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd2" placeholder="Enter password">
            </div>
      </div>
	  <div class="form-group">
            <label class="control-label col-sm-2" for="email">E-mail:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
      </div>
      <div class="form-group">
            <label class="control-label col-sm-2" for="firstName">First name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="firstName" placeholder="Enter your first name">
            </div>
      </div>
      <div class="form-group">
            <label class="control-label col-sm-2" for="lastName">Last name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lastName" placeholder="Enter your last name">
            </div>
      </div>
      <div class="form-group" id="picButton">
            <label class="control-label col-sm-2" for="profilePic">Profile Picture:</label>
            <input type="file" name="image" id="profilePic"/>
      </div>
      <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Register</button>
            </div>
      </div>
    </form>
</div><?php }} ?>
