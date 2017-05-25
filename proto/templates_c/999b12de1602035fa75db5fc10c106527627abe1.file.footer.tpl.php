<?php /* Smarty version Smarty-3.1.15, created on 2017-05-14 21:37:39
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\common\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188651409558ef9e76628421-87927654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '999b12de1602035fa75db5fc10c106527627abe1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\common\\footer.tpl',
      1 => 1494790571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188651409558ef9e76628421-87927654',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58ef9e7662aac8_42730950',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ef9e7662aac8_42730950')) {function content_58ef9e7662aac8_42730950($_smarty_tpl) {?>    </div>
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
