<?php
/* Smarty version 3.1.33, created on 2019-02-26 13:06:08
  from 'C:\xampp\htdocs\mvc\app\templates\playercreate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c752bb040f357_04085727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd83a4c522af2b0dcf9ea4b59908f0c4fb566eb50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc\\app\\templates\\playercreate.tpl',
      1 => 1551182762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c752bb040f357_04085727 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
	<div class="card-body">
		<h5 class="card-title">Nouveau Joueur</h5>
		<form id="playerForm" action="/player/save" method="post" enctype="multipart/form-data">
			<input type="hidden" id="playerFormStatus" name="playerFormStatus" value="<?php echo $_smarty_tpl->tpl_vars['player']->value->status;?>
">
			<input type="hidden" id="playerFormid" name="playerFormid" value="<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
">
			<div class="form-group">
				<label for="playerFormPseudo">Quel est le pseudo du joueur ?</label>
				<input type="text" class="form-control" name="playerFormPseudo" id="playerFormPseudo" value="<?php echo $_smarty_tpl->tpl_vars['player']->value->pseudo;?>
">
			</div>
			<p>
				<button type="submit" class="btn btn-primary"><?php if ($_smarty_tpl->tpl_vars['player']->value->id == 0) {?>Créer<?php } else { ?>Mettre à jour<?php }?></button>
			</p>
		</form>
	</div>
</div><?php }
}
