<?php /* Smarty version Smarty-3.1.15, created on 2017-05-14 18:02:58
         compiled from "/mnt/d/CODE/www/lbaw1631/proto/templates/common/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98791578958f0ed5a72e302-07213309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd44fc0e7900beaa9c8d09901e2027efb30927544' => 
    array (
      0 => '/mnt/d/CODE/www/lbaw1631/proto/templates/common/footer.tpl',
      1 => 1494781315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98791578958f0ed5a72e302-07213309',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f0ed5a730f02_52287489',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0ed5a730f02_52287489')) {function content_58f0ed5a730f02_52287489($_smarty_tpl) {?>    </div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/bootstrap.min.js"></script>
	
	<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
  </body>
</html><?php }} ?>
