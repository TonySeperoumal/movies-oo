<?php

	namespace Model\Manager;

	use \PDO;
	use \PDOException;

	class DatabaseConnector
	{
		public function getDbh()
		{
		
			try {
				//crée un objet PDO
				$dbh = new PDO(
					'mysql:host='.DBHOST.';dbname='.DBNAME, 	//dsn
					DBUSER, 	//username 
					DBPASS, //mot de passe
					array(
						PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", //pour communiquer en utf8 avec le serveur MySQL
						PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //on veut recevoir des arrays associatifs, dans les requêtes SELECT
						PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING //on veut afficher toutes les erreurs MySQL
					)
				);
			} catch (PDOException $e) {
			    echo 'Erreur de connexion : ' . $e->getMessage();
			}
			//retourne la variable $dbh fraichement créée
			return $dbh;
		}
	}