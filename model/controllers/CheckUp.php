<?php
	// Vérifie si il y a une session user avant de redirer vers la page de connexion si celui-ci ,n'existe pas
	// session_start();
	if (!$_SESSION["userInfo"] && !$_SESSION["userInfo"])
		echo '<meta http-equiv="refresh" content="0;URL=http://localhost/ProjetPPE/view/login">';
?>