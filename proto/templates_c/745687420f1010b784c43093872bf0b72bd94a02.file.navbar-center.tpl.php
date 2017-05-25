<?php /* Smarty version Smarty-3.1.15, created on 2017-05-25 19:49:03
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\common\navbar-center.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157855231658f161f336c946-65471212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '745687420f1010b784c43093872bf0b72bd94a02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\common\\navbar-center.tpl',
      1 => 1495734446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157855231658f161f336c946-65471212',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f161f33b54b7_75433805',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f161f33b54b7_75433805')) {function content_58f161f33b54b7_75433805($_smarty_tpl) {?><ul class="nav navbar-nav">
	<li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Home</a></li>
	<li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/posts/new-question.php">Post a question</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
    <li data-toggle="collapse" data-target=".navbar-collapse.in" class="dropdown">
        <a href="#" class="dropbtn">
             <span class="glyphicon glyphicon-user"></span>Profile
        </a>
        <div class="dropdown-content">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/profile.php">Your Profile</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/edit-profile.php">Edit Info</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/user/logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
        </div>
    </li>
</ul><?php }} ?>
