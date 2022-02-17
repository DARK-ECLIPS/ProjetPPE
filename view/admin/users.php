<!DOCTYPE html>
<?php
session_start();
include_once('../../model/controllers/CheckUp.php');
include "../../model/classes/Users.php";
require '../../model/classes/ConnexionDB.php';
require '../../model/classes/ActionsDB.php';

$conn_db = new ConnexionDB();
$base_donnees = new ActionsDB($conn_db);
$reponse = $base_donnees->getAllUsers();
?>
<!-- echo ($_SESSION['userInfo']['nom']) -->
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboad</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" type="text/css" href="../../css/users.css">
  </head>
  
  <body onload="adminMenu(), creanauMenu('prof')">
    <?php include_once('../model/navigation.php'); ?>

    <div class="main">

      <?php include_once('../model/topbar.php'); ?>
      

      <div class="details">
				
      	<?php include_once('../../model/assets/sass/snow.html'); ?>
        
				<div class="recentOrders">
          <div class="cardHeader">

						<h1>Affichage utilisateurs</h1>
						<h2>Affichage utilisateurs</h2>
						<table>
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
									/*
									$donnees recupere ligne par ligne les
									informations qui sont dans la vue $reponse.
									fetch() recupere une ligne à la fois.
									*/
									while ($donnees = $reponse->fetch()) {
								?>
											<tr>
													<td><?php echo $donnees["pseudo"] ?></td>
													<td><?php echo $donnees["nom"] ?></td>
													<td><?php echo $donnees["prenom"] ?></td>
													<td><?php echo $donnees["sexe"] ?></td>
													<td><?php echo $donnees["password"] ?></td>
													<td><?php echo $donnees["mail_utilisateur"] ?></td>
													<td align="center">
														<a href="http://localhost/ProjetPPE/model/controllers/requetes.php?OperaPPE=4441524b2045434e454c4953&operation=deleteUser&userID=<?php echo $donnees["id_utilisateur"] ?>">
															<i class="fas fa-trash-alt"></i>
														</a>
													</td>
													<td align="center">
														<a href="./updateData.php?OperaPPE=4441524b2045434e454c4953&operation=updateUser<?php 
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
							<?php } ?>
							</tbody>
					</table>


					
						<div class="button">
							<a href="http://localhost/ProjetPPE/view/admin/adminMenu"><input type="button" value='Retour'></a>
							<a href="http://localhost/ProjetPPE/view/admin/userCreate"><input type="submit" value="Ajouter"></a>
						</div>

					</div>
        </div>
      </div>
    </div>
    
  </body>
</html>