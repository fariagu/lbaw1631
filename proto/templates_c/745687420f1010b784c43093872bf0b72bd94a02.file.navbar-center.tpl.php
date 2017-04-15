<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 02:00:09
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\common\navbar-center.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157855231658f161f336c946-65471212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '745687420f1010b784c43093872bf0b72bd94a02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\common\\navbar-center.tpl',
      1 => 1492214405,
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
	<li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="../home">Home</a></li>
	<li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="../post">Post a question</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
    <li data-toggle="collapse" data-target=".navbar-collapse.in" class="dropdown">
        <a href="#" class="dropbtn">
             <span class="glyphicon glyphicon-user"></span>Username
        </a>
        <div class="dropdown-content">
            <a href="../profile">Your Profile</a>
            <a href="../edit-profile">Edit Info</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/user/logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
        </div>
    </li>
</ul><?php }} ?>
