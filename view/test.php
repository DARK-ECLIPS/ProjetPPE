<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Affichage utilisateur</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
	<?php
		// "Importer" les classes utilisées
		include "../model/classes/Users.php";
		require '../model/classes/ConnexionDB.php';
		require '../model/classes/ActionsDB.php';

		$conn_db = new ConnexionDB();

		// Création d'un objet qui va gérer les actions dans la BD
		$base_donnees = new ActionsDB($conn_db);

		$reponse = $base_donnees->getAllUsers();
	?>
  	<h1>Affichage utilisateurs <a href="index.php?operation=menu">(MENU)</a></h1>
  	<table border=1>
	    <thead>
	        <tr>
	            <th>No. </th>
	            <th>Pseudo</th>
	            <th>Nom</th>
	            <th>Prénom</th>
	            <th>Sexe</th>
	            <th>Mot de passe</th>
	            <th>Supprimer</th>
	            <th>MAJ</th>
	        </tr>
	    </thead>
	    <tbody>
	    	<?php
	    		/*
					$donnees recupere ligne par ligne les
					informations qui sont dans la vue $reponse.
					fetch() recupere une ligne à la fois.
	    		*/
	    		while ($donnees = $reponse->fetch()) {
	    	?>
			        <tr>
			            <td></td>
			            <td><?php echo $donnees["pseudo"] ?></td>
			            <td><?php echo $donnees["nom"] ?></td>
			            <td><?php echo $donnees["prenom"] ?></td>
			            <td><?php echo $donnees["sexe"] ?></td>
			            <td><?php echo $donnees["mdp"] ?></td>
			            <td align="center">
			            	<a href="requetes.php?operation=suppression&pseudo=<?php echo $donnees["pseudo"] ?>">❌</a>
			            </td>
			            <td align="center">
			            	<a href="index.php?operation=modification<?php 
			            			echo '&pseudo='.$donnees["pseudo"]. 
			            				 '&nom='.$donnees["nom"].
			            				 '&prenom='.$donnees["prenom"].
			            				 '&sexe='.$donnees["sexe"].
			            				 '&mdp='.$donnees["mdp"]
			            		?>">🔄</a>
			            </td>
			        </tr>
			<?php } ?>
	    </tbody>
	</table>
</body>
</html>