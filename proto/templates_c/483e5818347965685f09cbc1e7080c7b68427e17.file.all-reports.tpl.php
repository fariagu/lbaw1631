<?php /* Smarty version Smarty-3.1.15, created on 2017-05-28 21:28:17
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\admin\all-reports.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70110688258f217bc4117c2-02489834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '483e5818347965685f09cbc1e7080c7b68427e17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\admin\\all-reports.tpl',
      1 => 1495905090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70110688258f217bc4117c2-02489834',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f217bc4136b6_56966317',
  'variables' => 
  array (
    'reports' => 0,
    'BASE_URL' => 0,
    'report' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f217bc4136b6_56966317')) {function content_58f217bc4136b6_56966317($_smarty_tpl) {?><div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title">Reports</h2>
				<div class="list-group">
					<?php  $_smarty_tpl->tpl_vars['report'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['report']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reports']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['report']->key => $_smarty_tpl->tpl_vars['report']->value) {
$_smarty_tpl->tpl_vars['report']->_loop = true;
?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/report.php?id_member=<?php echo $_smarty_tpl->tpl_vars['report']->value['id_member'];?>
&id_post=<?php echo $_smarty_tpl->tpl_vars['report']->value['id_post'];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['report']->value['description'];?>
</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
