<?php
namespace App\Models;

class Game extends DbTable {
	
	public $id=0;
	public $title="Renseigner le titre";
	public $created;
	public $status="CRE";
	const TABLE_SQL="game";
	
	function __construct() {
		$this->created=date_create(date("Y-m-d H:i:s"));
	}
	
}