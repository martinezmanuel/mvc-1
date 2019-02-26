<table class="table">
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
{literal}
<script>

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
</script>
{/literal}