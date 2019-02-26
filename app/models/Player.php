<?php
namespace App\Models;

class Player extends DbTable {
	
	public $id=0;
	public $pseudo="Choisir un pseudo";
	public $created;
	public $status="CRE";
	const TABLE_SQL="player";
	
	function __construct() {
		$this->created=date_create(date("Y-m-d H:i:s"));
	}

}