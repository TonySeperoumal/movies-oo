<?php

	namespace Model;

	use \PDO;

	class MovieManager
	{
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
		public function getIdMovie($id)
		{
			$dbConnector = new Manager\DatabaseConnector();
			$dbh = $dbConnector->getDbh();

			$sql = "SELECT id, title, year, imdb_id
					FROM movies 
					WHERE id = :id";
			$sth = $dbh->prepare($sql);
			$sth->bindValue(':id', $id);
			$sth->execute();

			$movie = $sth->fetch();
			return $movie;

		}

	}