<?php
	require_once('php/process.php');

	$info = new info();
	header('Content-Type: application/json');
	if (isset($_GET["u"])){
		$info->loadPlayer($_GET["u"]);
	}
	
	

?>