<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 12:55:15
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/common/navbar-center.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156881570158f1f67c8c9668-25737247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0c9d24c2f9d5fcacb4a751b63b6ea4cc787ce01' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/common/navbar-center.tpl',
      1 => 1492257048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156881570158f1f67c8c9668-25737247',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f1f67c949589_80926950',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f1f67c949589_80926950')) {function content_58f1f67c949589_80926950($_smarty_tpl) {?><ul class="nav navbar-nav">
	<li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="../home">Home</a></li>
	<li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="../posts/new-question.php">Post a question</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
    <li data-toggle="collapse" data-target=".navbar-collapse.in" class="dropdown">
        <a href="#" class="dropbtn">
             <span class="glyphicon glyphicon-user"></span>Username
        </a>
        <div class="dropdown-content">
            <a href="../profile">Your Profile</a>
            <a href="../user/edit-profile.php">Edit Info</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/user/logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
        </div>
    </li>
</ul><?php }} ?>
