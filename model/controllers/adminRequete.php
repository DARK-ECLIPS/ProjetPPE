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

      if ($_POST['OperaPPE'] == 'users') {
        
        $conn_db->getDB()->query("UPDATE utilisateur SET nom = '".$_POST['nom']."', prenom = '".$_POST['prenom']."', sexe = '".$_POST['sexe']."', mail_utilisateur = '".$_POST['mail']."', password = '".$_POST['mdp']."' WHERE id_utilisateur = '".$_POST['userID']."'");

        ?>
        <script>
          alert("Utilisateur mis à jour avec succès");
          window.location = "http://localhost/ProjetPPE/view/admin/users";
        </script>
      <?php
      }

      // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // 

    }
  }
?>