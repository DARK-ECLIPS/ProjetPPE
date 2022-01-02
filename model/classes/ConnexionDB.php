<?php
	/*
		Classe qui permet une connexion a la BD
	*/
  class ConnexionDB
  {
		// ATTRIBUTS
		private $db; // pointer vers la BD
		private $sgdbr; // gestionnaire BD utilisé
		private $host;// le serveur
		private $dbname;// nom de la BD
		private $utilisateur;// uilisateur qui se connecte
		private $password;// le mot de passe pour l'utilisateur connecté

    public function __construct()
    {
      $this->sgdbr = 'mysql';
			$this->host = 'localhost';
			$this->dbname = 'projetppe';
			$this->utilisateur = 'root';
			$this->password = '';

			try
			{
				$this->db = new PDO("{$this->getSGDBR()}:host={$this->getHost()};
				  	dbname={$this->getDBName()}",
				$this->getutilisateur(),
				$this->getPassword(),
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			}
			catch (PDO_Exception $e)
			{
				echo $e->getMessage();
			}
    }

    public function getDB()
    {
      return $this->db;
    }

		public function getSGDBR()
		{
			return $this->sgdbr;
		}

		public function getHost()
		{
			return $this->host;
		}

		public function getDBName()
		{
			return $this->dbname;
		}

		public function getutilisateur()
		{
			return $this->utilisateur;
		}

		public function getPassword()
		{
			return $this->password;
		}
  }
?>