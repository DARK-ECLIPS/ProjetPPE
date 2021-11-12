<?php

function first($string){ //function parameters, two variables.
  return $string;  //returns the second argument passed into the function
}

function getUser($table) {

  include 'connexion.php';

  $requet = "SELECT * FROM users";
  $result = login()->prepare($requet);
  $result->execute();
  $users = $result->fetchAll();

  // On affiche chaque utilisateur et chaque infos de l'utilisateur une à une
  foreach ($users as $user) {
    if ($user['full_name'] == $table) {
      for ($i = 0; $i < $var_dump.count($user)/2; $i++) {
        $cap[$i] = $user[$i];
      }
      return $cap;
      break;
    } else return "Erreur";
  }
}
?>