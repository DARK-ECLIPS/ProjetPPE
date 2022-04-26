<?php

	// "Importer" les classes utilisées

  include '../classes/Users.php';
  require '../classes/ConnexionDB.php';
  require '../classes/ActionsDB.php';

	$conn_db = new ConnexionDB();

	// Création d'un objet qui va gérer les actions dans la BD
	$base_donnees = new ActionsDB($conn_db);

	/*
		Si dans l'URL il y a une variable qui 
		s'appele 'OperaPPE'
	*/
  if (isset($_GET['OperaPPE'])) {
    if ($_GET['OperaPPE'] == '4441524b2045434e454c4953') {

      // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // 

      echo "$_POST[enseignement] $_POST[classe] $_POST[nbr_eleve]";
      if ($_POST['OperaPPE'] == 'utilisateur') {
        
        $conn_db->getDB()->query("UPDATE utilisateur SET nom = '".$_POST['nom']."', prenom = '".$_POST['prenom']."', sexe = '".$_POST['sexe']."', mail_utilisateur = '".$_POST['mail']."', password = '".$_POST['mdp']."' WHERE id_utilisateur = '".$_POST['userID']."'");

        ?>
        <script>
          alert("Utilisateur mis à jour avec succès");
          window.location = "http://192.168.1.72/ProjetPPE/view/admin/utilisateurs.php";
        </script>
      <?php
      } else if ($_POST['OperaPPE'] == 'classe') {
        if ($_POST['enseignement'] == "BTS") {
          $ensignement = 3;

        } else if ($_POST['enseignement'] == "LYCEE") {
          $ensignement = 2;

        } else {
          $ensignement = 1;
        }

        $conn_db->getDB()->query("UPDATE classe SET id_enseignement = '".$ensignement."', libelle_classe = '".$_POST['classe']."', nbr_eleve = '".$_POST['nbr_eleve']."' WHERE libelle_classe = '".$_POST['oldData']."'");

        ?>
        <script>
          alert("Classe mis à jour avec succès");
          window.location = "http://192.168.1.72/ProjetPPE/view/admin/classes.php";
        </script>
      <?php
      }

      // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // 

    }
  }
?>