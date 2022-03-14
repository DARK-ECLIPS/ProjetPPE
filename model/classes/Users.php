<?php
	/**
	* Classe Users.
	  Elle pourrait accueillir un registre/tuple/ligne de la table Users
	*/
	class Users
	{
		private $id;
		private $pseudo;
		private $nom;
		private $prenom;
		private $tel_cel;
		private $mail_utilisateur;
		private $password;
		private $sexe;
		// private $avatar;
		
		function __construct($id,
							 $pseudo, 
							 $nom, 
							 $prenom,
							 $tel_cel,
							 $mail_utilisateur,
							 $password,
							 $sexe
							//  $avatar
							 )
		{
			$this->id = $id; 
			$this->pseudo = $pseudo; 
		 	$this->nom = $nom; 
		 	$this->prenom = $prenom;
		 	$this->tel_cel = $tel_cel;
		 	$this->mail_utilisateur = $mail_utilisateur;
		 	$this->password = $password;
		 	$this->sexe = $sexe;
		 	// $this->avatar = $avatar;
		}

		public function setId($id)
		{
			$this->id = $id;
		}

		public function setPseudo($pseudo)
		{
			$this->pseudo = $pseudo;
		}

		public function setNom($nom)
		{
			$this->nom = $nom;
		}

		public function setPrenom($prenom)
		{
			$this->prenom = $prenom;
		}

		public function setTel_cel($tel_cel)
		{
			$this->tel_cel = $tel_cel;
		}

		public function setMail_utilisateur($mail_utilisateur)
		{
			$this->mail_utilisateur = $mail_utilisateur;
		}

		public function setPassword($password)
		{
			$this->password = $password;
		}

		public function setSexe($sexe)
		{
			$this->sexe = $sexe;
		}

		// public function setAvatar($avatar)
		// {
		// 	$this->avatar = $avatar;
		// }
		
		public function getId()
		{
			return $this->id;
		}
		
		public function getPseudo()
		{
			return $this->pseudo;
		}

		public function getNom()
		{
			return $this->nom;
		}

		public function getPrenom()
		{
			return $this->prenom;
		}

		public function getTel_cel()
		{
			return $this->tel_cel;
		}

		public function getMail_utilisateur($mail_utilisateur)
		{
			return $this->mail_utilisateur;
		}

		public function getPassword()
		{
			return $this->password;
		}

		public function getSexe($sexe)
		{
			return $this->sexe;
		}

		// public function getAvatar($avatar)
		// {
		// 	return $this->avatar;
		// }
	}
?>