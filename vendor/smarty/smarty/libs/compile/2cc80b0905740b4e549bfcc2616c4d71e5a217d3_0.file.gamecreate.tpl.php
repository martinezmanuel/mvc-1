<?php
/* Smarty version 3.1.33, created on 2019-02-26 13:01:00
  from 'C:\xampp\htdocs\mvc\app\templates\gamecreate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c752a7c7f70f8_90251875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cc80b0905740b4e549bfcc2616c4d71e5a217d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc\\app\\templates\\gamecreate.tpl',
      1 => 1551182456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c752a7c7f70f8_90251875 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
	<div class="card-body">
		<h5 class="card-title">Nouvelle partie</h5>
		<form id="gameForm" action="/game/save" method="post" enctype="multipart/form-data">
			<input type="hidden" id="gameFormid" name="gameFormid" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
">
			<input type="hidden" id="gameFormStatus" name="gameFormStatus" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->status;?>
">
			<div class="form-group">
				<label for="gameFormTitle">Quel est le titre de votre partie ?</label>
				<input type="text" class="form-control" name="gameFormTitle" id="gameFormTitle" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->title;?>
">
			</div>
			<p>
				<button type="submit" class="btn btn-primary"><?php if ($_smarty_tpl->tpl_vars['game']->value->id == 0) {?>Créer<?php } else { ?>Mettre à jour<?php }?></button>
			</p>
		</form>
	</div>
</div><?php }
}
