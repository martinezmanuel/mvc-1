<table class="table">
<thead class="thead-dark">
<tr>
  <th scope="col">Id</th>
  <th scope="col">Nom du joueur</th>
  <th scope="col"></th>
</tr>
</thead>
<tbody>
{foreach $players as $player}
<tr><th scope='col'>{$player->id}</th><td>{$player->pseudo}</td><td><a class="btn btn-primary" href="\player\create\{$player->id}">Modifier</a>&nbsp;<a class="btn btn-danger" href="\player\delete\{$player->id}">Supprimer</a></td></tr>
{/foreach}
</tbody>
</table>