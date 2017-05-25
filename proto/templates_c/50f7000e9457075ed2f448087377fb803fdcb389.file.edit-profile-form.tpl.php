<?php /* Smarty version Smarty-3.1.15, created on 2017-05-14 21:40:04
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\user\edit-profile-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65301745558f20c99166397-30989315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50f7000e9457075ed2f448087377fb803fdcb389' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\user\\edit-profile-form.tpl',
      1 => 1494790571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65301745558f20c99166397-30989315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f20c9916fef4_52040015',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FORM_VALUES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f20c9916fef4_52040015')) {function content_58f20c9916fef4_52040015($_smarty_tpl) {?><div class="enter-info">
    <h1>Edit Account Info</h1>
    <form class="form-horizontal" id="register-form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/user/edit-profile.php" method="post" enctype="multipart/form-data">
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
            <input type="file" name="photo" id="profilePic"/>
      </div>
      <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Finish</button>
            </div>
      </div>
    </form>
    <form class="form-horizontal" id="delete-button" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/user/delete-profile.php" method="post" enctype="multipart/form-data">
        <div class="form-group" >
            <div class="col-sm-offset-3 col-sm-10">
                <button type="submit" class="btn btn-default">Delete Account</button>
            </div>
      </div>
    </form>
</div><?php }} ?>
