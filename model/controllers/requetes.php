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
      if ($_POST['OperaPPE'] == 'login') {

        // Création d'un objet "Users"
        $user = new Users("", $_POST['pseudo'], "", "", "", "", $_POST['mdp'], "", "");

        if ($base_donnees -> existe($user)) {
          echo "Connexion en cours....";
          // Redirection sur la page "index.php"
          echo '<meta http-equiv="refresh" content="0.5;URL=../../index.php?OperaPPE=menu">';

          // Récupération des donnés de l'user
          $userInfo = $base_donnees->getUser($_POST['pseudo'])->fetch();

          // Creation d'une session
          $base_donnees->newSession($userInfo);
          
        } else {
          echo "Information de connexion erronée (Identifiant / Mot de passe)";
          // Redirection sur la page "index.php"
          echo '<meta http-equiv="refresh" content="2;URL=../../view/login.php">';
        }
      }

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
                window.location = "http://localhost/ProjetPPE/view/userProfile/profile.php";
              </script>
            <?php
            } else {
              ?>
                <script>
                  alert("Le nouveau mot de passe ne doit pas être le même que l'ancien");
                  window.location = "http://localhost/ProjetPPE/view/userProfile/password.php";
                </script>
              <?php
            }
          } else {
            ?>
              <script>
                alert("La confirmation du passe n'est identique au nouveau mot de passe");
                window.location = "http://localhost/ProjetPPE/view/userProfile/password.php";
              </script>
            <?php
          }
        } else {
          ?>
            <script>
              alert("Mot de Passe Incorrect");
              window.location = "http://localhost/ProjetPPE/view/userProfile/password.php";
            </script>
          <?php
        }
      }

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
      echo '<meta http-equiv="refresh" content="0.5;URL=../../view/login.php">';

    }
  }
?>