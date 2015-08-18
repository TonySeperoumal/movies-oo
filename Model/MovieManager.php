<?php

	namespace Model;

	use \PDO;

	class MovieManager extends Manager\Manager
	{

		

		public function setTable()
		{
			$this->table = "movies";
		}

		public function getRandomMovies($number)
		{
			$dbConnector = new Manager\DatabaseConnector();
			$dbh = $dbConnector->getDbh();

			$sql = "SELECT id, title, year, imdb_id
					FROM movies 
					ORDER BY RAND()
					LIMIT :number";

			$sth = $dbh->prepare($sql);
			$sth->bindValue(':number', (int) $number, PDO::PARAM_INT);
			$sth->execute();

			$movies = $sth->fetchAll();
			return $movies;
		}
		
	}