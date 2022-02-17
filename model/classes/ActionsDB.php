<?php
	/**
	* Classe qui va gerer tout ce qu'on fera dans la base de données
		<=> 
	  Ajouts, Suppression, MAJ, et Récupération d'informations
	*/
	
  // require(__DIR__ . '/ConnexionDB');

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
			$requete = "select * from utilisateur";

			return $this->conn_db->getDB()->query($requete);
		}

    public function getUser($user)
    {
      $requete = "SELECT * FROM utilisateur WHERE pseudo = '$user'";
			
			return $this->conn_db->getDB()->query($requete);
    }

    public function getMatter($id)
    {
			$requete = "SELECT count(*) as quantite FROM professeur WHERE id_utilisateur = '$id'";
			$reponse = $this->conn_db->getDB()->prepare($requete);

			$reponse->bindValue('id_utilisateur', $id, PDO::PARAM_STR);
			$reponse->execute();

			$donnees = $reponse->fetch(PDO::FETCH_OBJ);

			$result = ($donnees->quantite != 0) ? true : false;

			if (!$result) {
				$requete2 = "SELECT count(*) as quantite FROM receptionniste WHERE id_utilisateur = '$id'";
				$reponse2 = $this->conn_db->getDB()->prepare($requete2);
				$reponse2->bindValue('id_utilisateur', $id, PDO::PARAM_STR);
				$reponse2->execute();
				$donnees2 = $reponse2->fetch(PDO::FETCH_OBJ);
				$result2 = ($donnees2->quantite != 0) ? true : false;

				if (!$result2) return "Admin";
				else return "Receptionniste";
			}
			else return "Professeur";
    }

		public function getAvatar($sexe)
		{
			if ($sexe == 'FEMME') return 'http://localhost/ProjetPPE/model/assets/images/women.png';
			else if ($sexe == 'HOMME') return 'http://localhost/ProjetPPE/model/assets/images/men.png';
			else return 'http://localhost/ProjetPPE/model/assets/images/manwo.png';
		}

		public function newSession($userInfo)
		{
			// Creation d'une session
			session_start();

			// Définition des valeur de la session
			$_SESSION["userInfo"] = array('id' => $userInfo['id_utilisateur'],
																		'pseudo' => $userInfo['pseudo'],
																		'nom' => $userInfo['nom'],
																		'prenom' => $userInfo['prenom'],
																		'tel' => $userInfo['tel_cel'],
																		'email' => $userInfo['mail_utilisateur'],
																		'sexe' => $userInfo['sexe'],
																		'avatar' => $this->getAvatar($userInfo['sexe']),
																		'matter' => $this->getMatter($userInfo['id_utilisateur'])
																	);
		}

		public function updateSession()
		{
			$userInfo = $this->getUser($_SESSION['userInfo']['pseudo'])->fetch(PDO::FETCH_ASSOC);

			$_SESSION["userInfo"] = array('id' => $userInfo['id_utilisateur'],
																		'pseudo' => $userInfo['pseudo'],
																		'nom' => $userInfo['nom'],
																		'prenom' => $userInfo['prenom'],
																		'tel' => $userInfo['tel_cel'],
																		'email' => $userInfo['mail_utilisateur'],
																		'sexe' => $userInfo['sexe'],
																		'avatar' => $this->getAvatar($userInfo['sexe']),
																		'matter' => $this->getMatter($userInfo['id_utilisateur'])
																	);
		}
		
    // // // // // // // // // //
		// public function add($user)
		// {
		// 	$requete = "insert into users values (:pseudo,
		// 										  :nom,
		// 										  :prenom,
		// 										  :password)";

		// 	$reponse = $this->conn_db->getDB()->prepare($requete);

		// 	/*
		// 		On valorise chaque marquer avec 
		// 		les valeurs réels
		// 	*/
		// 	$reponse->execute(array('pseudo' => $user->getPseudo(),
		// 							'nom' => $user->getNom(),
		// 							'prenom' => $user->getPrenom(),
		// 							'password' => $user->getpassword()));
		// }

		public function delete($user)
		{
			$requete = "delete from utilisateur
						where id_utilisateur = :userID";

			$reponse = $this->conn_db->getDB()->prepare($requete);

			$reponse->execute(array('userID' => $user->getId()));
		}

		public function update($pseudo, $user)
		{
			$requete = "update utilisateur
						set nom = :nom,
							prenom = :prenom,
							password = :password
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
			$reponse->bindValue('password', $user->getPassword(), PDO::PARAM_STR);
			$reponse->bindValue('pseudo', $pseudo, PDO::PARAM_STR);

			$reponse->execute();
		}

		public function existe($user)
		{
			$requete = "select count(*) as quantite 
									from utilisateur 
									where pseudo = :pseudo
									and password = :password";

			$reponse = $this->conn_db->getDB()->prepare($requete);

			$reponse->bindValue('pseudo', $user->getPseudo(), PDO::PARAM_STR);
			$reponse->bindValue('password', $user->getPassword(), PDO::PARAM_STR);

			$reponse->execute();

			$donnees = $reponse->fetch(PDO::FETCH_OBJ);

			$trouve = ($donnees->quantite != 0) ? true : false;

			return $trouve;
		}
	}
?>