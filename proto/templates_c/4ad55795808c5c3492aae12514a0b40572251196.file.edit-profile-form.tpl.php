<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 12:55:19
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/user/edit-profile-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91798752558f20a27b3d449-19037763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ad55795808c5c3492aae12514a0b40572251196' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/user/edit-profile-form.tpl',
      1 => 1492183391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91798752558f20a27b3d449-19037763',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f20a27b400d0_27891627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f20a27b400d0_27891627')) {function content_58f20a27b400d0_27891627($_smarty_tpl) {?><div class="enter-info">
    <h1>Edit Account Info</h1>
    <form class="form-horizontal" id="register-form">
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
                <button type="submit" class="btn btn-default">Finish</button>
            </div>
      </div>
    </form>
</div><?php }} ?>
