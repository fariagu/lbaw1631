<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 00:58:21
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\user\register-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29886032358f0c9a7c44259-22514250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa7542bd604014a76404e47aeaf743b329cdf7ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\user\\register-form.tpl',
      1 => 1496012176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29886032358f0c9a7c44259-22514250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0c9a7c454e3_26443697',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FORM_VALUES' => 0,
    'ERROR_MESSAGES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0c9a7c454e3_26443697')) {function content_58f0c9a7c454e3_26443697($_smarty_tpl) {?><div class="enter-info">
    <h1>Create New Account</h1>
    <form class="form-horizontal" id="register-form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/user/register.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
            <label class="control-label col-sm-2" for="username">Username:</label>
            <div class="col-sm-10">
                <input name="username" type="text" class="form-control" id="username" placeholder="Enter username" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['username'];?>
" autofocus>
            </div>
      </div>
      <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
                <input name="password" type="password" class="form-control" id="pwd" placeholder="Enter password" value="">
            </div>
      </div>
      <div class="form-group">
            <label class="control-label col-sm-2" for="pwd2">Confirm Password:</label>
            <div class="col-sm-10">
                <input name="confirmpassword" type="password" class="form-control" id="pwd2" placeholder="Enter password" value="">
            </div>
      </div>
	  <div class="form-group">
            <label class="control-label col-sm-2" for="email">E-mail:</label>
            <div class="col-sm-10">
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['email'];?>
">
            </div>
      </div>
      <div class="form-group">
            <label class="control-label col-sm-2" for="firstName">First name:</label>
            <div class="col-sm-10">
                <input name="firstname" type="text" class="form-control" id="firstName" placeholder="Enter your first name" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['firstname'];?>
">
            </div>
      </div>
      <div class="form-group">
            <label class="control-label col-sm-2" for="lastName">Last name:</label>
            <div class="col-sm-10">
                <input name="lastname" type="text" class="form-control" id="lastName" placeholder="Enter your last name" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['lastname'];?>
">
            </div>
      </div>
      <div class="form-group" id="picButton">
            <label class="control-label col-sm-2" for="profilePic">Profile Picture:</label>
            <input name="photo" type="file" name="image" id="profilePic"/>
      </div>
      <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Register</button>
            </div>
      </div>
    </form>
	<?php if ($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value) {?>
		<div class="alert alert-info">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Register error!</strong>   <?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value;?>
.
		</div>
	<?php }?>
</div><?php }} ?>
