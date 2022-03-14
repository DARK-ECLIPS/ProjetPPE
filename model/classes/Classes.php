<?php
	/**
	* Classe Classes.
	  Elle pourrait accueillir un registre/tuple/ligne de la table Classes
	*/
	class Classes
	{
		private $id;
		private $libelle_classe;
		private $nbr_eleve;
		
		function __construct($id,
							 $libelle_classe, 
							 $nbr_eleve
							 )
		{
			$this->id = $id; 
			$this->libelle_classe = $libelle_classe; 
		 	$this->nbr_eleve = $nbr_eleve; 
		}

		public function setId($id)
		{
			$this->id = $id;
		}

		public function setLibelle_classe($libelle_classe)
		{
			$this->libelle_classe = $libelle_classe;
		}

		public function setNbr_eleve($nbr_eleve)
		{
			$this->nbr_eleve = $nbr_eleve;
		}
		
		public function getId()
		{
			return $this->id;
		}
		
		public function getLibelle_classe()
		{
			return $this->libelle_classe;
		}

		public function getNbr_eleve()
		{
			return $this->nbr_eleve;
		}
	}
?>