<!DOCTYPE html>
<?php
include "controllers/classes/Users.php";
require 'controllers/classes/ConnexionDB.php';
require 'controllers/classes/ActionsDB.php';

$conn_db = new ConnexionDB();
$base_donnees = new ActionsDB($conn_db);
$reponse = $base_donnees->getAllClasses();
?>

<html>
  
  <body onload="creanauMenu('prof')"></body>
	<div class="details">
		<?php include_once('model/assets/sass/snow.html'); ?>
		
		<div class="recentOrders">
			<div class="cardHeader">

				<h1>Affichage Classe</h1>
				<h2>Affichage de</h2>

				<table class="scrolldown">
					<thead>
							<tr>
									<th>Enseignement</th>
									<th>Classe</th>
									<th>Elèves</th>
									<th>Supprimer</th>
									<th>MAJ</th>
							</tr>
					</thead>
					<tbody>
						<?php
							while ($donnees = $reponse->fetch()) {
								?>
									<tr>
										<td><?php echo $base_donnees->getEnseignement($donnees["id_enseignement"]) ?></td>
										<td><?php echo $donnees["libelle_classe"] ?></td>
										<td><?php echo "$donnees[nbr_eleve] Éleves" ?></td>
										<td align="center">
										<a href="controllers/requetes.php?OperaPPE=4441524b2045434e454c4953&operation=deleteTab&tabID=<?php echo $donnees["id_enseignement"] ?>&more=<?php echo $donnees["nbr_eleve"] ?>&tab=3">
												<i class="fas fa-trash-alt"></i>
											</a>
										</td>
										<td align="center">
											<a href="index.php?OperaPPE=admin&Action=updateData&OperaPPE2=4441524b2045434e454c4953&operation=classe<?php
												echo '&id_enseignement='.$donnees["id_enseignement"]. 
													'&libelle_classe='.$donnees["libelle_classe"].
													'&nbr_eleve='.$donnees["nbr_eleve"]
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
				<a href="index.php?OperaPPE=admin&Action=ajoutBD&Option=classe"><input type="submit" value="Ajouter"></a>
			</div>

			</div>
		</div>
	</div>
</html>