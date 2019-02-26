<?php
/* Smarty version 3.1.33, created on 2019-01-04 15:20:52
  from 'C:\xampp\htdocs\mvc\app\templates\playerlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2f6bc43004d4_10011583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdac79be8d53ae98c4c9448295ebad2454d55461' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc\\app\\templates\\playerlist.tpl',
      1 => 1544027739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2f6bc43004d4_10011583 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
<thead class="thead-dark">
<tr>
  <th scope="col">Id</th>
  <th scope="col">Nom du joueur</th>
  <th scope="col"></th>
</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players']->value, 'player');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
?>
<tr><th scope='col'><?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
</th><td><?php echo $_smarty_tpl->tpl_vars['player']->value->pseudo;?>
</td><td><a class="btn btn-primary" href="\player\create\<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
">Modifier</a>&nbsp;<a class="btn btn-danger" href="\player\delete\<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
">Supprimer</a></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table><?php }
}
