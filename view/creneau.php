<!DOCTYPE html>
<?php
session_start();
include_once('../model/controllers/CheckUp.php');
?>
<!-- echo ($_SESSION['userInfo']['nom']) -->
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboad</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/creneau.css">
  </head>
  
  <body onload="adminMenu(), creanauMenu('prof')">
    <?php include_once('model/navigation.php'); ?>

    <div class="main">

      <?php include_once('model/topbar.php'); ?>
      

      <div class="details">
				
      	<?php include_once('../model/assets/sass/snow.html'); ?>
        
				<div class="recentOrders">
          <div class="cardHeader">
						<h2>Ajout Crénaux</h2>

						<div class="content">
							
							<div class="row">
								<div class="select">
									<label>Nom du professeur</label>
									<select id="prof" name="prof">
										<option value="select">Selectionner un professeur</option>
									</select>
								</div>
							</div>


							<div class="row">
							<!-- <div class="row" onchange="creanauMenu(this)"> -->
								<div class="checkbox">
									<div>
										<input type="radio" id="case1" name="groupe1" value="COLLEGE" onchange="creanauMenu('checkbox', this)">
										<label for="case1">Collège</label>
									</div>
									<div>
										<input type="radio" id="case2" name="groupe1" value="LYCEE" onchange="creanauMenu('checkbox', this)">
										<label for="case2">Lycée</label>
									</div>
									<div>
										<input type="radio" id="case3" name="groupe1" value="BTS" onchange="creanauMenu('checkbox', this)">
										<label for="case3">BTS</label>
									</div>
								</div>
							</div>
						
						
						
							
							<div class="row">
								<div class="select">
									<label>Classe</label>
									<select id="classe" name="classe">
										<option value="select">Selectionner un enseignement</option>
									</select>
								</div>
							</div>
							
							<div class="row">
								<div class="select" onclick="creanauMenu('matiere', this)">
									<label>Matiere</label>
									<select id="matiere" name="matiere">
										<option value="select">Selectionner une matiere</option>
									</select>
								</div>
							</div>
							
							<div class="row">
								<div class="select">
									<label for="country">Salle de classe</label>
									<select id="country" name="country">
										<option value="0">Selectionner une salle</option>
										<option value="01">Salle N° 1</option>
										<option value="02">Salle N° 2</option>
										<option value="03">Salle N° 3</option>
										<option value="04">Salle N° 4</option>
										<option value="05">Salle N° 5</option>
										<option value="06">Salle N° 6</option>
										<option value="07">Salle N° 7</option>
										<option value="08">Salle N° 8</option>
										<option value="09">Salle N° 9</option>
										<option value="10">Salle N° 10</option>
										<option value="11">Salle N° 11</option>
										<option value="12">Salle N° 12</option>
										<option value="13">Salle N° 13</option>
										<option value="14">Salle N° 14</option>
										<option value="15">Salle N° 15</option>
									</select>
								</div>
							</div>
							
							<div class="row">
								<div class="select">
									<label>Jour</label>
									<select id="country" name="country">
										<option id="1" value="Lundi">Lundi</option>
										<option id="2"value="Mardi">Mardi</option>
										<option id="3"value="Mercredi">Mercredi</option>
										<option id="4"value="Jeudi">Jeudi</option>
										<option id="5"value="Vendredi">Vendredi</option>
									</select>
								</div>
							</div>
							
							<div class="row">
								<div class="select">
									<label for="country">Heure début</label>
									<input type="time" id="timeD"/>
								</div>
							</div>
							
							<div class="row">
								<div class="select">
									<label for="country">Heure fin</label>						<input type="time" id="timeF"/>
								</div>
							</div>
						</div>


					
						<div class="button">
							<a href="http://localhost/ProjetPPE/view/menu"><input type="button" value='Annulé'></a>
							<input type="submit" value="Valider">
						</div>


					</div>
        </div>
      </div>
    </div>
    
  </body>
</html>