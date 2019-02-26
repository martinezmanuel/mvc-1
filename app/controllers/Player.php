<?php
namespace App\Controllers;

use \App\Kernel;
use \App\Models\Player as PlayerModel;

class Player extends ControllerStd {

	public function defaultAction () {
		$this->listAllAction();
	}	

	public function saveAction () {
		if ( $this->getParameters("playerformpseudo") != null ) {
			$newplayer=PlayerModel::persist(array("id"=>$this->getParameters("playerformid",0),"pseudo"=>$this->getParameters("playerformpseudo"),"status"=>$this->getParameters("playerformstatus"),"created"=>date("Y-m-d H:i:s")));
			Kernel::flushDatabase();
		}
		$this->listAllAction();
	}

	public function deleteAction (int $id) {
		if ( $id > 0 ) {
			$newplayer=PlayerModel::remove($id);
			Kernel::flushDatabase();
		} else Throw new \Exception("Suppression impossible, l'identifiant est manquant");
		$this->listAllAction();
	}

	public function listAllAction () {
		$players=PlayerModel::findAll();
		Kernel::viewerSmarty("Liste des joueurs","playerlist.tpl",array("players"=>$players));		
	}
	
	public function showAction (int $id) {
		$players=array();
		$players[]=PlayerModel::find($id);
		if ( $players[0] === null ) Throw new \Exception("La partie $id n'existe pas");
		Kernel::viewerSmarty("Joueur n°".$id,"playerlist.tpl",array("players"=>$players));		
	}
	
	public function createAction (int $id) {
		if ( $id > 0 ) {
			$player=PlayerModel::find($id);
			$title="Joueur n°".$id;
		}
		else {
			$player = new PlayerModel();
			$title="Création d'un joueur";
		}
		Kernel::viewerSmarty($title,"playercreate.tpl",array("player"=>$player));		
	}
	
}