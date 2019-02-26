<?php 
require('../app/Kernel.php');
require('../vendor/autoload.php');
ob_start();
try {
	\App\Kernel::router();		
}
catch (Exception $e) {
	echo $e->getMessage();
}
$content=ob_get_clean();
require("../app/views/base.php");
?>
