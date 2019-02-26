<table class="table">
<thead class="thead-dark">
<tr>
  <th scope="col">Id</th>
  <th scope="col">Titre de la partie</th>
  <th scope="col"></th>
</tr>
</thead>
<tbody>
{foreach $games as $game}
<tr><th scope='col'>{$game->id}</th><td>{$game->title}</td><td><a class="btn btn-primary" href="\game\create\{$game->id}">Modifier</a>&nbsp;<a class="btn btn-danger" href="\game\delete\{$game->id}">Supprimer</a></td></tr>
{/foreach}
</tbody>
</table>