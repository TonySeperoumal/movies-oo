<?php
	//dans Controller/DefaultController.php

	namespace Controller;

	class DefaultController	
	{
		//affiche la page d'accueil
		public function home()
		{
			$movieManager = new \Model\MovieManager();
			$movies = $movieManager->getRandomMovies(30);

			include("views/home.php");
		}
		//affiche la page de details d'un film
		public function details($id)
		{
			$movieManager = new \Model\MovieManager();
			$movie = $movieManager->getIdMovie($id);
			include("views/details.php");
		}

		public function fourofour()
		{
			header('HTTP/1.0 404 Not Found');
			include("views/errors/404.php");
		}
	}