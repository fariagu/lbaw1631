<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 14:30:59
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\common\confirmationModal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50044705592c14835d4873-35943600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97d7ce7cc6a3844036c355c45930bddd43b9ce39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\common\\confirmationModal.tpl',
      1 => 1496060997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50044705592c14835d4873-35943600',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592c14835d6069_32239697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c14835d6069_32239697')) {function content_592c14835d6069_32239697($_smarty_tpl) {?><div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer" >
                <button type="button" class="btn btn-default confirmButton">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">No</span>
                </button>
            </div>
        </div>
    </div>
</div><?php }} ?>
