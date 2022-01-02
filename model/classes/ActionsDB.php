<?php
	/**
	* Classe qui va gerer tout ce qu'on fera dans la base de données
		<=> 
	  Ajouts, Suppression, MAJ, et Récupération d'informations
	*/
	
  // require(__DIR__ . '/ConnexionDB.php');

	class ActionsDB
	{
		private $conn_db;

		function __construct($conn_db)
		{
			$this->conn_db = $conn_db;
		}

		public function setConn_DB($conn_db)
		{
			$this->conn_db = $conn_db;
		}

		public function getConn_DB()
		{
			return $this->conn_db;
		}

		public function getAllUsers()
		{
			$requete = "select * from users";

			return $this->conn_db->getDB()->query($requete);
		}

    public function getUser($user)
    {
      $requete = "SELECT * FROM users WHERE pseudo = '$user'";
			
			return $this->conn_db->getDB()->query($requete);
    }

		public function getAvatar($id)
		{
			$requete = "SELECT * FROM images WHERE id = '$id'";

			return $this->conn_db->getDB()->query($requete);
		}

		public function newSession($userInfo, $avatarInfo)
		{
			// Creation d'une session
			session_start();

			// Définition des valeur de la session
			$_SESSION["userInfo"] = array('id' => $userInfo['id'],
																		'pseudo' => $userInfo['pseudo'],
																		'nom' => $userInfo['nom'],
																		'prenom' => $userInfo['prenom'],
																		'email' => $userInfo['email'],
																		'avatar' => $userInfo['avatar'],
																		'sexe' => $userInfo['sexe']
																	);

			$_SESSION["avatarInfo"] = array('id' => $avatarInfo['id'],
																			'image' => $avatarInfo['image'],
																			'created' => $avatarInfo['created']
																	);
		}

		public function updateSession()
		{
			$avatarInfo = $this->getAvatar($_SESSION['userInfo']['id'])->fetch(PDO::FETCH_ASSOC);

			$_SESSION["avatarInfo"] = array('id' => $avatarInfo['id'],
																			'image' => $avatarInfo['image'],
																			'created' => $avatarInfo['created']
																	);
		}
		
    // // // // // // // // // //
		// public function add($user)
		// {
		// 	$requete = "insert into users values (:pseudo,
		// 										  :nom,
		// 										  :prenom,
		// 										  :mdp)";

		// 	$reponse = $this->conn_db->getDB()->prepare($requete);

		// 	/*
		// 		On valorise chaque marquer avec 
		// 		les valeurs réels
		// 	*/
		// 	$reponse->execute(array('pseudo' => $user->getPseudo(),
		// 							'nom' => $user->getNom(),
		// 							'prenom' => $user->getPrenom(),
		// 							'mdp' => $user->getMdp()));
		// }

		// public function delete($user)
		// {
		// 	$requete = "delete from users
		// 				where pseudo = :pseudo";

		// 	$reponse = $this->conn_db->getDB()->prepare($requete);

		// 	$reponse->execute(array('pseudo' => $user->getPseudo()));
		// }

		public function update($pseudo, $user)
		{
			$requete = "update users
						set nom = :nom,
							prenom = :prenom,
							mdp = :mdp
						where pseudo = :pseudo";

			$reponse = $this->conn_db->getDB()->prepare($requete);

			/*
				Valoriser les marqueurs

				Associe une valeur à un nom correspondant ou 
				à un point d'interrogation (comme paramètre fictif) 
				dans la requête SQL qui a été utilisé pour préparer la requête.

				Identifiant du paramètre. Pour une requête préparée utilisant 
				les marqueurs, cela sera un nom de paramètre de la forme :nom. 
				Pour une requête préparée utilisant les points d'interrogation 
				(comme paramètre fictif), 
				cela sera un tableau indexé numériquement qui commence 
				à la position 1 du paramètre.

				La valeur réel à associer au paramètre.

				Type de données explicite pour le paramètre utilisant les constantes
			*/
			$reponse->bindValue('nom', $user->getNom(), PDO::PARAM_STR);
			$reponse->bindValue('prenom', $user->getPrenom(), PDO::PARAM_STR);
			$reponse->bindValue('mdp', $user->getMdp(), PDO::PARAM_STR);
			$reponse->bindValue('pseudo', $pseudo, PDO::PARAM_STR);

			$reponse->execute();
		}

		public function existe($user)
		{
			$requete = "select count(*) as quantite 
									from users 
									where pseudo = :pseudo
									and mdp = :mdp";

			$reponse = $this->conn_db->getDB()->prepare($requete);

			$reponse->bindValue('pseudo', $user->getPseudo(), PDO::PARAM_STR);
			$reponse->bindValue('mdp', $user->getMdp(), PDO::PARAM_STR);

			$reponse->execute();

			$donnees = $reponse->fetch(PDO::FETCH_OBJ);

			$trouve = ($donnees->quantite != 0) ? true : false;

			return $trouve;
		}
	}
?>