<?php
/* Smarty version 3.1.33, created on 2019-02-26 11:42:27
  from 'C:\xampp\htdocs\mvc\app\templates\gamelistjson.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c751813d966a8_81639234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4936a536a835f08c28bfdf37b4a56ee99bc5404' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc\\app\\templates\\gamelistjson.tpl',
      1 => 1551177746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c751813d966a8_81639234 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
<thead class="thead-dark">
<tr>
  <th scope="col">Id</th>
  <th scope="col">Titre de la partie</th>
  <th scope="col"></th>
</tr>
</thead>
<tbody id="tbodyparties">
</tbody>
</table>

<?php echo '<script'; ?>
>

	function RefreshList() {
		//console.log("RefreshList");
		$.ajax(
			{
				type:'POST',
				url:'/game/json',
				dataType:'json',
				success: function(data) {
					//console.log(data['parties']);
					let parties=data['parties'];
					var html="";
					$.each( parties, 
						function( key, value ) {
							html += "<tr><td>"+value.id+"</td><td>"+value.title+"</td>";
							html += "<td><a class='btn btn-primary' href='\\game\\create\\"+value.id+"'>Modifier</a>&nbsp;<a class='btn btn-danger' href='\\game\\delete\\"+value.id+"'>Supprimer</a></td>";
							html+="</tr>";
						}
					);
					$('#tbodyparties').html(html);				
				},
				error: function(xhr, status, error) {
					console.log(error);
				}
			}
		);
	}

	$(document).ready( function() {	
	
		RefreshList();
		setInterval(RefreshList,1000*5); //Toutes les 5 secondes

	});
<?php echo '</script'; ?>
>
<?php }
}
