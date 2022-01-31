<?php

require '../../classes/ConnexionDB.php';
require '../../classes/ActionsDB.php';

$conn_db = new ConnexionDB();
$base_donnees = new ActionsDB($conn_db);
			
$reponse = $conn_db->getDB()->query("SELECT `nom`, `prenom`, `pseudo` FROM `utilisateur` INNER JOIN professeur ON utilisateur.id_utilisateur = professeur.id_utilisateur");

session_start();
header('Content-Type: application/json');

while($donnees = $reponse->fetch()) {
  $data[] = array("nom"=>$donnees['nom'], "prenom"=>$donnees['prenom'], "pseudo"=>$donnees['pseudo']);
}

echo json_encode(array("response"=>$data));

?>