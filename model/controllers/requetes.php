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
    if ($_GET['OperaPPE'] == 'login') {
      if ($_POST['OperaPPE'] == 'login') {

        // Création d'un objet "Users"
        $user = new Users($_POST['pseudo'], "", "", $_POST['mdp'], "", "", "");

        if ($base_donnees -> existe($user)) {
          echo "Connexion en cours....";
          // Redirection sur la page "index.php"
          echo '<meta http-equiv="refresh" content="0.5;URL=../../index.php?OperaPPE=menu">';

          // Récupération des donnés de l'user
          $userInfo = $base_donnees->getUser($_POST['pseudo'])->fetch();
          $userAvatar = $base_donnees->getAvatar($userInfo['id'])->fetch(PDO::FETCH_ASSOC);

          // Creation d'une session
          $base_donnees->newSession($userInfo, $userAvatar);
          
        } else {
          echo "Information de connexion erronée (Identifiant / Mot de passe)";
          // Redirection sur la page "index.php"
          echo '<meta http-equiv="refresh" content="2;URL=../../view/login.php">';
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