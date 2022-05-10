<?php

require '../../../classes/ConnexionDB.php';
require '../../../classes/ActionsDB.php';

$conn_db = new ConnexionDB();
$base_donnees = new ActionsDB($conn_db);

$reponse = $conn_db->getDB()->query("SELECT * from matiere");

session_start();
header('Content-Type: application/json');

while($donnees = $reponse->fetch()) {
  $data[] = array("id_enseignement"=>$donnees['id_enseignement'], "libelle_classe"=>$donnees['libelle_classe'], "libelle_matiere"=>$donnees['libelle_matiere']);
}

echo json_encode(array("response"=>$data));

?>