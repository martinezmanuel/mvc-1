<div class="card">
	<div class="card-body">
		<h5 class="card-title">Nouveau Joueur</h5>
		<form id="playerForm" action="/player/save" method="post" enctype="multipart/form-data">
			<input type="hidden" id="playerFormStatus" name="playerFormStatus" value="{$player->status}">
			<input type="hidden" id="playerFormid" name="playerFormid" value="{$player->id}">
			<div class="form-group">
				<label for="playerFormPseudo">Quel est le pseudo du joueur ?</label>
				<input type="text" class="form-control" name="playerFormPseudo" id="playerFormPseudo" value="{$player->pseudo}">
			</div>
			<p>
				<button type="submit" class="btn btn-primary">{if $player->id == 0}Créer{else}Mettre à jour{/if}</button>
			</p>
		</form>
	</div>
</div>