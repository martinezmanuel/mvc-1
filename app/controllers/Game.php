<?php
namespace App\Controllers;

use \App\Models\Game as GameModel;
use \App\Kernel;

class Game extends ControllerStd {

	public function defaultAction () {
		$this->listAllAction();		
	}	

	public function saveAction () {
		if ( $this->getParameters("gameformtitle") != null ) {
			$newgame=GameModel::persist(array("id"=>$this->getParameters("gameformid",0),"title"=>$this->getParameters("gameformtitle"),"status"=>$this->getParameters("gameformstatus"),"created"=>date("Y-m-d H:i:s")));
			Kernel::flushDatabase();
		}
		$this->listAllAction();
	}

	public function deleteAction (int $id) {
		
		if ( $id > 0 ) {
			$newgame=GameModel::remove($id);
			Kernel::flushDatabase();
		} else Throw New \Exception("Suppression impossible, l'identifiant est manquant");
		$this->listAllAction();
	}

	public function listAllAction () {
		// Sans AJAX
		// $games=GameModel::findAll();
		// Kernel::viewerSmarty("gamelist.tpl",array("games"=>$games));	

		// Appel AJAX
		Kernel::viewerSmarty("Liste des parties","gamelistjson.tpl");		
	}

	public function listAllJsonAction () {
		$games=GameModel::findAll();
		header("Content-type:application/json");
		echo json_encode( array("parties"=>$games), JSON_PRETTY_PRINT );
	}
	
	public function showAction (int $id) {
		$games=array();
		$games[]=GameModel::find($id);
		if ( $games[0] === null ) Throw new \Exception("La partie $id n'existe pas");
		Kernel::viewerSmarty("Partie n°".$id,"gamelist.tpl",array("games"=>$games));		
	}
	
	public function createAction (int $id) {
		if ( $id > 0 ) {
			$game=GameModel::find($id);
			$title="Partie n°".$id;
		}
		else {
			$game = new \App\Models\Game();
			$title="Nouvelle partie";
		}
		Kernel::viewerSmarty($title,"gamecreate.tpl",array("game"=>$game));		
	}
	
}