<?php
	/**
	* Classe Matieres.
	  Elle pourrait accueillir un registre/tuple/ligne de la table Matieres
	*/
	class Matieres
	{
		private $id;
		private $libelle_matiere;
		private $id_enseignement;
		private $libelle_classe;
		
		function __construct($id,
							 $libelle_matiere, 
							 $id_enseignement, 
							 $libelle_classe
							 )
		{
			$this->id = $id; 
			$this->libelle_matiere = $libelle_matiere; 
		 	$this->id_enseignement = $id_enseignement; 
		 	$this->libelle_classe = $libelle_classe;
		}

		public function setId($id)
		{
			$this->id = $id;
		}

		public function setLibelle_matiere($libelle_matiere)
		{
			$this->libelle_matiere = $libelle_matiere;
		}

		public function setId_enseignement($id_enseignement)
		{
			$this->id_enseignement = $id_enseignement;
		}

		public function setLibelle_classe($libelle_classe)
		{
			$this->libelle_classe = $libelle_classe;
		}
		
		public function getId()
		{
			return $this->id;
		}
		
		public function getLibelle_matiere()
		{
			return $this->libelle_matiere;
		}

		public function getId_enseignement()
		{
			return $this->id_enseignement;
		}

		public function getLibelle_classe()
		{
			return $this->libelle_classe;
		}
	}
?>