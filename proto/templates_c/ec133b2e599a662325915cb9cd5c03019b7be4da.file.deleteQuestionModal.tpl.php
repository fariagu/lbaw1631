<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 18:01:48
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\posts\deleteQuestionModal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2145928127592c432189f594-95575194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec133b2e599a662325915cb9cd5c03019b7be4da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\posts\\deleteQuestionModal.tpl',
      1 => 1496073693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2145928127592c432189f594-95575194',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592c43218a1c09_72233213',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'question_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c43218a1c09_72233213')) {function content_592c43218a1c09_72233213($_smarty_tpl) {?><div class="modal fade" id="deleteQuestionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer" >
				<form class="form-horizontal" id="register-form" method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/posts/delete-question.php">
					<input name="id" style="display: none" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['question_id']->value;?>
">
					<button type="submit" class="btn btn-default deleteQuestionButton">Yes</button>
					<button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">No</span>
					</button>
				</form>
            </div>
        </div>
    </div>
</div><?php }} ?>
