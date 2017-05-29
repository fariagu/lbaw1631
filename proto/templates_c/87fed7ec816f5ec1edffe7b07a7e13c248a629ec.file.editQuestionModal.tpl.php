<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 22:40:29
         compiled from "C:\xampp\htdocs\lbaw1631\proto\templates\posts\editQuestionModal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:233531615592c58724233c6-06439477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87fed7ec816f5ec1edffe7b07a7e13c248a629ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw1631\\proto\\templates\\posts\\editQuestionModal.tpl',
      1 => 1496090427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233531615592c58724233c6-06439477',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592c5872424970_83668347',
  'variables' => 
  array (
    'question' => 0,
    'categories' => 0,
    'category' => 0,
    'tagsText' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c5872424970_83668347')) {function content_592c5872424970_83668347($_smarty_tpl) {?><!-- Modal -->
<div class="modal fade" id="editQuestionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Edit Question</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
			<div class="form-group">
				<label for="title">Title:</label>
				<input name="title" type="text" class="form-control" id="title" value="<?php echo $_smarty_tpl->tpl_vars['question']->value['title'];?>
" placeholder="Enter your question title" autofocus>
			</div>
			<div class="form-group">
				<label for="question">Question:</label>
				<textarea name="question" class="form-control" rows="5" id="question"><?php echo $_smarty_tpl->tpl_vars['question']->value['description'];?>
</textarea>
			</div>
			<div class="form-group">
				<label for="sel1">Category:</label>
				<select name="sel1" class="form-control" id="sel1">
					<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['category']->value['id']==$_smarty_tpl->tpl_vars['question']->value['id_category']) {?>
							<option select="selected"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
						<?php } else { ?>
							<option><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
                        <?php }?>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="tags">Tags:</label>
				<textarea name="tags" class="form-control" rows="5" id="tags" placeholder="Separate each tag by a semicolon (;)"><?php echo $_smarty_tpl->tpl_vars['tagsText']->value;?>
</textarea>
			</div>
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		</form>
		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default editQuestionButton">Submit</button>
      </div>
    </div>
  </div>
</div><?php }} ?>
