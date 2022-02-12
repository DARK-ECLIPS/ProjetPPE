<?php

require '../../../classes/ConnexionDB.php';
require '../../../classes/ActionsDB.php';

$conn_db = new ConnexionDB();
$base_donnees = new ActionsDB($conn_db);

$reponse = $conn_db->getDB()->query("SELECT type_classe, libelle_classe FROM classe INNER JOIN enseignement ON classe.id_enseignement = enseignement.id_enseignement");

session_start();
header('Content-Type: application/json');

while($donnees = $reponse->fetch()) {
  $data[] = array("type_classe"=>$donnees['type_classe'], "libelle_classe"=>$donnees['libelle_classe']);
}

echo json_encode(array("response"=>$data));

?>