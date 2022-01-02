<?php
	/**
	* Classe Users.
	  Elle pourrait accueillir un registre/tuple/ligne  de la table Users
	*/
	class Users
	{

		private $pseudo;
		private $nom;
		private $prenom;
		private $mdp;
		private $email;
		private $avatar;
		private $sexe;
		
		function __construct($pseudo, 
							 $nom, 
							 $prenom,
							 $mdp,
							 $email,
							 $avatar,
							 $sexe)
		{
			$this->pseudo = $pseudo; 
		 	$this->nom = $nom; 
		 	$this->prenom = $prenom;
		 	$this->mdp = $mdp;
		 	$this->email = $email;
		 	$this->avatar = $avatar;
		 	$this->sexe = $sexe;
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

		public function setMdp($mdp)
		{
			$this->mdp = $mdp;
		}

		public function setEmail($email)
		{
			$this->email = $email;
		}

		public function setAvatar($avatar)
		{
			$this->avatar = $avatar;
		}

		public function setSexe($sexe)
		{
			$this->sexe = $sexe;
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

		public function getMdp()
		{
			return $this->mdp;
		}

		public function getEmail($email)
		{
			return $this->email;
		}

		public function getAvatar($avatar)
		{
			return $this->avatar;
		}

		public function getSexe($sexe)
		{
			return $this->sexe;
		}
	}
?>