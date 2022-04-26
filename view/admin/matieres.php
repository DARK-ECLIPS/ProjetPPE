<!DOCTYPE html>
<?php
session_start();
include_once('../../model/controllers/CheckUp.php');
include "../../model/classes/Users.php";
require '../../model/classes/ConnexionDB.php';
require '../../model/classes/ActionsDB.php';

$conn_db = new ConnexionDB();
$base_donnees = new ActionsDB($conn_db);
$reponse = $base_donnees->getAllmatieres();
?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboad</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" type="text/css" href="../../model/assets/css/tableScroll.css">
  </head>
  
  <body onload="adminMenu(), creanauMenu('prof')">
    <?php include_once('../model/navigation.php'); ?>

    <div class="main">
      <?php include_once('../model/topbar.php'); ?>
      

      <div class="details">
      	<?php include_once('../../model/assets/sass/snow.html'); ?>
        
				<div class="recentOrders">
          <div class="cardHeader">

						<h1>Affichage Matiere</h1>
						<h2>Affichage Matiere</h2>
						<table class="scrolldown">
							<thead>
									<tr>
											<th>Enseignement</th>
											<th>Classe</th>
											<th>Matière</th>
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
										if ($donnees["id_enseignement"] == 1) $enseignement = "COLLEGE";
										else if ($donnees["id_enseignement"] == 2) $enseignement = "LUCÉE";
										else $enseignement = "BTS"
										?>
											<tr>
													<td><?php echo $enseignement ?></td>
													<td><?php echo $donnees["libelle_classe"] ?></td>
													<td><?php echo $donnees["libelle_matiere"] ?></td>
													<td align="center">
														<a href="http://192.168.1.72/ProjetPPE/model/controllers/requetes.php?OperaPPE=4441524b2045434e454c4953&operation=deleteTab&tabID=<?php echo $donnees["id_matiere"] ?>&tab=1">
															<i class="fas fa-trash-alt"></i>
														</a>
													</td>
													<td align="center">
														<!-- <a href="./updateData.php?OperaPPE=4441524b2045434e454c4953&operation=updateUser<?php 
																// echo '&pseudo='.$donnees["pseudo"]. 
																// 	'&nom='.$donnees["nom"].
																// 	'&prenom='.$donnees["prenom"].
																// 	'&sexe='.$donnees["sexe"].
																// 	'&mdp='.$donnees["password"].
																// 	'&mail='.$donnees["mail_utilisateur"].
																// 	'&id='.$donnees["id_utilisateur"]
															?>">
																--> <i class="fas fa-edit"></i> <!--
															</a> -->
													</td>
											</tr>
							<?php } ?>
							</tbody>
						</table>


					
						<div class="button">
							<a href="http://192.168.1.72/ProjetPPE/view/admin/adminMenu.php"><input type="button" value='Retour'></a>
							<a href="http://192.168.1.72/ProjetPPE/view/admin/ajoutBD/matiere.php"><input type="submit" value="Ajouter"></a>
						</div>

					</div>
        </div>
      </div>
    </div>
    
  </body>
</html>