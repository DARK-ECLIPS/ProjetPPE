<?php

function login() {
  // On se connecte à MySQL
  //// Souvent on identifie cet objet par la variable $conn ou $db

  $servername = "192.168.1.72";
  $username = "root";
  $password = "";
  $dbname = "projetppe";
  
  try
  {
    $db = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  }
  catch (Exception $e)
  {
    // En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : ' . $e->getMessage());
  }
  // Si tout va bien, on peut continuer
  return $db;
}
?>