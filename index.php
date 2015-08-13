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
		$controller->details();
	}
	else {
		$controller->fourofour();
	}
