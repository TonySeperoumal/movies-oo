<?php
	
	include('config.php');

	spl_autoload_register();
	
	$controller = new Controller\DefaultController();

	if (empty($_GET)){
		//accueill
		$controller->home();

	}
	elseif ($_GET['p'] == "details/"){
		//details du film
		$id = $_GET['id'];
		$controller->details($id);
	}
	else {
		$controller->fourofour();
	}
