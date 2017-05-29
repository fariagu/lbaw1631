<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 19:21:11
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\posts\editQuestionModal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:233531615592c58724233c6-06439477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87fed7ec816f5ec1edffe7b07a7e13c248a629ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\posts\\editQuestionModal.tpl',
      1 => 1496078467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233531615592c58724233c6-06439477',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592c5872424970_83668347',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c5872424970_83668347')) {function content_592c5872424970_83668347($_smarty_tpl) {?><!-- Modal -->
<div class="modal fade" id="editQuestionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Reason:</label>
            <textarea class="form-control" id="report-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default editQuestionButton">Submit</button>
      </div>
    </div>
  </div>
</div><?php }} ?>
