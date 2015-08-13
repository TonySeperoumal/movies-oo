<?php
	//dans Controller/DefaultController.php

	namespace Controller;

	class DefaultController	
	{
		//affiche la page d'accueil
		public function home()
		{
			include("views/home.php");
		}
		//affiche la page de details d'un film
		public function details()
		{
			include("views/details.php");
		}
	}