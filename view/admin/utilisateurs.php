<!DOCTYPE html>
<?php
include "controllers/classes/Users.php";
require 'controllers/classes/ConnexionDB.php';
require 'controllers/classes/ActionsDB.php';

$conn_db = new ConnexionDB();
$base_donnees = new ActionsDB($conn_db);
$reponse = $base_donnees->getAllUsers();
?>

<html>
  <body onload="creanauMenu('prof')"></body>

	<div class="details">
		<?php include_once('model/assets/sass/snow.html'); ?>
		
		<div class="recentOrders">
			<div class="cardHeader">

				<h1>Affichage utilisateurs</h1>
				<h2>Affichage utilisateurs</h2>

				<table class="scrolldown">
					<thead>
							<tr>
									<th>Pseudo</th>
									<th>Nom</th>
									<th>Prénom</th>
									<th>Sexe</th>
									<th>Mot de passe</th>
									<th>Mail</th>
									<th>Supprimer</th>
									<th>MAJ</th>
							</tr>
					</thead>
					<tbody>
						<?php
							while ($donnees = $reponse->fetch()) {
								?>
									<tr>
										<td><?php echo $donnees["pseudo"] ?></td>
										<td><?php echo $donnees["nom"] ?></td>
										<td><?php echo $donnees["prenom"] ?></td>
										<td><?php echo $donnees["sexe"] ?></td>
										<td><?php echo $donnees["password"] ?></td>
										<td><?php echo substr_replace($donnees["mail_utilisateur"] ,"",-18) ?></td>
										<td align="center">
											<a href="controllers/requetes.php?OperaPPE=4441524b2045434e454c4953&operation=deleteTab&tabID=<?php echo $donnees["id_utilisateur"] ?>&tab=0">
												<i class="fas fa-trash-alt"></i>
											</a>
										</td>
										<td align="center">
											<a href="index.php?OperaPPE=admin&Action=updateData&OperaPPE2=4441524b2045434e454c4953&operation=utilisateur<?php
												echo '&pseudo='.$donnees["pseudo"]. 
													'&nom='.$donnees["nom"].
													'&prenom='.$donnees["prenom"].
													'&sexe='.$donnees["sexe"].
													'&mdp='.$donnees["password"].
													'&mail='.$donnees["mail_utilisateur"].
													'&id='.$donnees["id_utilisateur"]
												?>">
												<i class="fas fa-edit"></i>
											</a>
										</td>
									</tr>
								<?php
							} ?>
					</tbody>
			</table>

			
			<div class="button">
				<a href="index.php?OperaPPE=admin&Action=menu"><input type="button" value='Retour'></a>
				<a href="index.php?OperaPPE=admin&Action=ajoutBD&Option=utilisateur"><input type="submit" value="Ajouter"></a>
			</div>

			</div>
		</div>
	</div>
</html>