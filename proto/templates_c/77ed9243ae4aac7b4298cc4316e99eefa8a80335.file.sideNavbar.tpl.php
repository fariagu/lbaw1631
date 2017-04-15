<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 22:52:31
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/common/sideNavbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101524911658f0ed5a687f63-96822265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77ed9243ae4aac7b4298cc4316e99eefa8a80335' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/common/sideNavbar.tpl',
      1 => 1492292998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101524911658f0ed5a687f63-96822265',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0ed5a6923e1_15119658',
  'variables' => 
  array (
    'top_categories' => 0,
    'BASE_URL' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0ed5a6923e1_15119658')) {function content_58f0ed5a6923e1_15119658($_smarty_tpl) {?><div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
				<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/categories/category.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
					</li>
				<?php } ?>
				<li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/categories/categories.php" id="viewAll">View all</a>
                </li>
            </ul>
        </div>
<!-- /#wrapper --><?php }} ?>
