<?php
	/**
	* Classe Creneaux.
	  Elle pourrait accueillir un registre/tuple/ligne de la table Creneaux
	*/
	class Creneaux
	{
		private $id;
		private $id_enseignement;
		private $libelle_classe;
		private $id_matiere;
		private $edt_matiere_deb;
		private $edt_matiere_fin;
		private $salle_de_classe;
		
		function __construct($id,
							 $id_enseignement, 
							 $libelle_classe, 
							 $id_matiere,
							 $edt_matiere_deb,
							 $edt_matiere_fin,
							 $salle_de_classe
							 )
		{
			$this->id = $id; 
			$this->id_enseignement = $id_enseignement; 
		 	$this->libelle_classe = $libelle_classe; 
		 	$this->id_matiere = $id_matiere;
		 	$this->edt_matiere_deb = $edt_matiere_deb;
		 	$this->edt_matiere_fin = $edt_matiere_fin;
		 	$this->salle_de_classe = $salle_de_classe;
		}

		public function setId($id)
		{
			$this->id = $id;
		}

		public function setId_enseignement($id_enseignement)
		{
			$this->id_enseignement = $id_enseignement;
		}

		public function setLibelle_classe($libelle_classe)
		{
			$this->libelle_classe = $libelle_classe;
		}

		public function setId_matiere($id_matiere)
		{
			$this->id_matiere = $id_matiere;
		}

		public function setEdt_matiere_deb($edt_matiere_deb)
		{
			$this->edt_matiere_deb = $edt_matiere_deb;
		}

		public function setEdt_matiere_fin($edt_matiere_fin)
		{
			$this->edt_matiere_fin = $edt_matiere_fin;
		}

		public function setSalle_de_classe($salle_de_classe)
		{
			$this->salle_de_classe = $salle_de_classe;
		}
		
		public function getId()
		{
			return $this->id;
		}
		
		public function getId_enseignement()
		{
			return $this->id_enseignement;
		}

		public function getLibelle_classe()
		{
			return $this->libelle_classe;
		}

		public function getId_matiere()
		{
			return $this->id_matiere;
		}

		public function getEdt_matiere_deb()
		{
			return $this->edt_matiere_deb;
		}

		public function getEdt_matiere_fin($edt_matiere_fin)
		{
			return $this->edt_matiere_fin;
		}

		public function getSalle_de_classe()
		{
			return $this->salle_de_classe;
		}
	}
?>