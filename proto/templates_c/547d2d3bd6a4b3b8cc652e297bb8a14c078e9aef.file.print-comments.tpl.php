<?php /* Smarty version Smarty-3.1.15, created on 2017-05-25 23:10:35
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\posts\print-comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:672381039591396c9c44ae5-47234055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '547d2d3bd6a4b3b8cc652e297bb8a14c078e9aef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\posts\\print-comments.tpl',
      1 => 1495746633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '672381039591396c9c44ae5-47234055',
  'function' => 
  array (
    'print_correct' => 
    array (
      'parameter' => 
      array (
        'margin' => 0,
      ),
      'compiled' => '',
    ),
    'print_comments' => 
    array (
      'parameter' => 
      array (
        'margin' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_591396c9cf21d8_40408051',
  'variables' => 
  array (
    'answer' => 0,
    'margin' => 0,
    'BASE_URL' => 0,
    'user' => 0,
    'answers' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591396c9cf21d8_40408051')) {function content_591396c9cf21d8_40408051($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_print_correct')) {
    function smarty_template_function_print_correct($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['print_correct']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<?php if ($_smarty_tpl->tpl_vars['answer']->value['a_id']) {?>
		<div class="panel panel-default" id="correctAnswer" style="margin-left:<?php echo $_smarty_tpl->tpl_vars['margin']->value;?>
px">
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['answer']->value['a_id'];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['answer']->value['username'];?>
</a>
			<div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['answer']->value['description'];?>

				<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
					<button style="display: none" class="btn btn-default glyphicon glyphicon-remove closeComment" />
					<button type="submit" class="btn btn-default reply">Reply</button>
					<textarea style="display: none" name="answer" class="form-control commentText" rows="5"></textarea>
					<button style="display: none" type="submit" class="btn btn-default comment" hidden>Post</button>
				<?php }?>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['answer']->value['comments']) {?>
		  <?php smarty_template_function_print_comments($_smarty_tpl,array('answers'=>$_smarty_tpl->tpl_vars['answer']->value['comments'],'user'=>$_smarty_tpl->tpl_vars['user']->value,'margin'=>$_smarty_tpl->tpl_vars['margin']->value+50));?>

		<?php }?>
	<?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_print_comments')) {
    function smarty_template_function_print_comments($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['print_comments']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
  <?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['answers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->_loop = true;
?>
	<div class="panel panel-default" id="answerComment" style="margin-left:<?php echo $_smarty_tpl->tpl_vars['margin']->value;?>
px">
		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['answer']->value['m_id'];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['answer']->value['username'];?>
</a>
		<div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['answer']->value['description'];?>

			<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
				<button style="display: none" class="btn btn-default glyphicon glyphicon-remove closeComment" />
				<button type="submit" class="btn btn-default reply">Reply</button>
				<textarea style="display: none" name="answer" class="form-control commentText" rows="5"></textarea>
				<button style="display: none" type="submit" class="btn btn-default comment" hidden>Post</button>
			<?php }?>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['answer']->value['comments']) {?>
      <?php smarty_template_function_print_comments($_smarty_tpl,array('answers'=>$_smarty_tpl->tpl_vars['answer']->value['comments'],'user'=>$_smarty_tpl->tpl_vars['user']->value,'margin'=>$_smarty_tpl->tpl_vars['margin']->value+50));?>

    <?php }?>
  <?php } ?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>
<?php }} ?>
