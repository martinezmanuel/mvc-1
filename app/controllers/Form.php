<?php
namespace App\Controllers;
use \App\Kernel;

class Form {
	
	static public function defaultAction () {
		Kernel::viewerSmarty("Test de formulaire","form.tpl");		
	}

}