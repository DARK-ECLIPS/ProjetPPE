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

      if ($_POST['OperaPPE'] == 'login') {

        // Création d'un objet "Users"
        $user = new Users("", $_POST['pseudo'], "", "", "", "", $_POST['mdp'], "", "");

        if ($base_donnees -> existe($user)) {
          echo "Connexion en cours....";
          // Redirection sur la page "index.php"
          echo '<meta http-equiv="refresh" content="0.5;URL=../../index?OperaPPE=menu">';

          // Récupération des donnés de l'user
          $userInfo = $base_donnees->getUser($_POST['pseudo'])->fetch();

          // Creation d'une session
          $base_donnees->newSession($userInfo);
          
        } else {
          echo "Information de connexion erronée (Identifiant / Mot de passe)";
          // Redirection sur la page "index.php"
          echo '<meta http-equiv="refresh" content="2;URL=../../view/login">';
        }
      }

      // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // 

      else if ($_POST['OperaPPE'] == 'password') {
        session_start();
        
        $userInfo = $base_donnees->getUser($_SESSION['userInfo']['pseudo'])->fetch();
        
				if ($userInfo['password'] == $_POST['currentPassword']) {
					if ($_POST['newPassword'] == $_POST['confirmPassword']) {
            if ($_POST['newPassword'] !== $_POST['currentPassword']) {
              
              $conn_db->getDB()->query("UPDATE utilisateur SET password = '".$_POST['newPassword']."' WHERE id_utilisateur = '".$_SESSION['userInfo']['id']."'");

              ?>
              <script>
                alert("Mot de passe mis à jour avec succès");
                window.location = "http://localhost/ProjetPPE/view/userProfile/profile";
              </script>
            <?php
            } else {
              ?>
                <script>
                  alert("Le nouveau mot de passe ne doit pas être le même que l'ancien");
                  window.location = "http://localhost/ProjetPPE/view/userProfile/password";
                </script>
              <?php
            }
          } else {
            ?>
              <script>
                alert("La confirmation du passe n'est identique au nouveau mot de passe");
                window.location = "http://localhost/ProjetPPE/view/userProfile/password";
              </script>
            <?php
          }
        } else {
          ?>
            <script>
              alert("Mot de Passe Incorrect");
              window.location = "http://localhost/ProjetPPE/view/userProfile/password";
            </script>
          <?php
        }
      }
      
      // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // 

      // Requete de la vue Creneau
      else if ($_POST['OperaPPE'] == 'creneau') {

        // On defini de nouvelle valuer au infos reçus du form | On est obligerde faire des boucle pour récupérer les éléments reçus des select
        // Par la suite on récupère dans la BDD les infos qu'il nous manque

        // On récupère les le pseudo du professeur puis on fait une requete pour récupérer l'id du professeur ayant un pseudo similaire
        foreach ($_POST['prof'] as $select) {
          $prof = $conn_db->getDB()->query("SELECT `id_utilisateur` from utilisateur where concat(pseudo =  '".$select."')")->fetch();
          $profID = $prof['id_utilisateur'];
        };

        $school = $conn_db->getDB()->query("SELECT `id_enseignement` from enseignement where type_classe = '".$_POST['enseignement']."'")->fetch();
        $schoolID = $school['id_enseignement'];

        foreach ($_POST['classe'] as $select) {
          $classe = $select;
        };

        foreach ($_POST['matiere'] as $select) {
          $matiere = $select; 
        };

        $matiere = $conn_db->getDB()->query("SELECT `id_matiere` from matiere where libelle_matiere = '".$matiere."' AND libelle_classe = '".$classe."'")->fetch();
        $matiereID = $matiere['id_matiere'];

        foreach ($_POST['salle'] as $select) {
          $room = $select;
        };
        foreach ($_POST['jour'] as $select) {
          $days = $select;
        };
        foreach ($_POST['heureD'] as $select) {
          $startH = $select;
        };
        foreach ($_POST['heureF'] as $select) {
          $endH = $select;
        };

        // On ajoute le creneau dans la BDD
        $conn_db->getDB()->query("INSERT INTO creneau (id_utilisateur, id_enseignement, libelle_classe, id_matiere, edt_jour, edt_heure_deb, edt_heure_fin, salle_de_classe) VALUES ('".$profID."', '".$schoolID."', '".$classe."', '".$matiereID."', '".$days."', '".$startH."', '".$endH."', '".$room."')");

        ?>
          <script>
            alert("Creneau Ajouter avec succès");
            window.location = "http://localhost/ProjetPPE/view/admin/adminMenu";
          </script>
        <?php
      }

      // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // 

      // Requete de la vue Matiere
      else if ($_POST['OperaPPE'] == 'matiere') {

        // On defini de nouvelle valuer au infos reçus du form | On est obligerde faire des boucle pour récupérer les éléments reçus des select
        // Par la suite on récupère dans la BDD les infos qu'il nous manque

        $school = $conn_db->getDB()->query("SELECT `id_enseignement` from enseignement where type_classe = '".$_POST['enseignement']."'")->fetch();
        $schoolID = $school['id_enseignement'];

        foreach ($_POST['classe'] as $select) {
          $classe = $select;
        };

        // On ajoute le creneau dans la BDD
        $conn_db->getDB()->query("INSERT INTO matiere (libelle_matiere, id_enseignement, libelle_classe) VALUES ('".$_POST['matiere']."', '".$schoolID."', '".$classe."')");
        
        echo "<script>alert('La Matiere $_POST[matiere] à été ajouter à la classe $classe avec succès'); window.location = 'http://localhost/ProjetPPE/view/admin/adminMenu';</script>";
      }

      // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // 

      elseif ($_GET['operation'] == 'deleteUser') {
        
        // Création d'un objet "Users" La seule information qu'on valorise est le pseudo et le mot passe

        $user = new Users($_GET['userID'], "", "", "", "", "", "", "");

        // Supprimer le users
        $base_donnees->delete($user);

        // Redirection sur la page "users.php"
        echo '<meta http-equiv="refresh" content="0;URL=http://localhost/ProjetPPE/view/admin/users">';
      }
      
      // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // 

    } else if ($_GET['OperaPPE'] == 'logout') {

      // Initialisation de la session.
      // Si vous utilisez un autre nom
      // session_name("autrenom")
      session_start();
      
      // Détruit toutes les variables de session
      $_SESSION = array();
      
      // Si vous voulez détruire complètement la session, effacez également
      // le cookie de session.
      // Note : cela détruira la session et pas seulement les données de session !
      if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
          $params["path"], $params["domain"],
          $params["secure"], $params["httponly"]
        );
      }
      
      // Finalement, on détruit la session.
      session_destroy();
      echo '<meta http-equiv="refresh" content="0.5;URL=../../view/login">';

    }
  }
?>