<!DOCTYPE html>
<?php
session_start();
include_once('../../model/controllers/CheckUp.php');
?>
<!-- echo ($_SESSION['userInfo']['nom']) -->
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboad</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" type="text/css" href="../../css/creneau.css">
  </head>
  
  <body onload="adminMenu(), creanauMenu('prof')">
    <?php include_once('../model/navigation.php'); ?>

    <div class="main">

      <?php include_once('../model/topbar.php'); ?>
      

      <div class="details">
				
      	<?php include_once('../../model/assets/sass/snow.html'); ?>
        
				<div class="recentOrders">
          <div class="cardHeader">
          <form method="post" action="http://localhost/ProjetPPE/model/controllers/requetes.php?OperaPPE=4441524b2045434e454c4953">
					<input type="hidden" name="OperaPPE" value="creneau">

						<h2>Ajout Crénaux</h2>

						<div class="content">
							
							<div class="row">
								<div class="select">
									<label>Nom du professeur</label>
									<select id="prof" name="prof[]" required>
										<option value="">Selectionner un professeur</option>
									</select>
								</div>
							</div>


							<div class="row">
							<!-- <div class="row" onchange="creanauMenu(this)"> -->
								<div class="checkbox">
									<div>
										<input type="radio" id="case1" name="enseignement" value="COLLEGE" onchange="creanauMenu('checkbox', this)">
										<label for="case1">Collège</label>
									</div>
									<div>
										<input type="radio" id="case2" name="enseignement" value="LYCEE" onchange="creanauMenu('checkbox', this)">
										<label for="case2">Lycée</label>
									</div>
									<div>
										<input type="radio" id="case3" name="enseignement" value="BTS" onchange="creanauMenu('checkbox', this)">
										<label for="case3">BTS</label>
									</div>
								</div>
							</div>
						
						
						
							
							<div class="row">
								<div class="select">
									<label>Classe</label>
									<select id="classe" name="classe[]" required>
										<option value="">Selectionner un enseignement</option>
									</select>
								</div>
							</div>
							
							<div class="row">
								<div class="select">
									<label>Matiere</label>
									<select id="matiere" name="matiere[]" required>
										<option value="">Selectionner une matiere</option>
									</select>
								</div>
							</div>
							
							<div class="row">
								<div class="select" required>
									<label for="">Salle de classe</label>
									<select id="salle" name="salle[]">
										<option value="">Selectionner une salle</option>
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
								<div class="select" required>
									<label>Jour</label>
									<select id="jour" name="jour[]">
										<option id="1" value="Lundi">Lundi</option>
										<option id="2" value="Mardi">Mardi</option>
										<option id="3" value="Mercredi">Mercredi</option>
										<option id="4" value="Jeudi">Jeudi</option>
										<option id="5" value="Vendredi">Vendredi</option>
									</select>
								</div>
							</div>
							
							<div class="row">
								<div class="select">
									<label for="time">Debut cour</label>
									
									<select id="heureD" name="heureD[]" required>
										<option id="0" value="7:00">7:00</option>
										<option id="2" value="7:30">7:30</option>
										<option id="3" value="8:00">8:00</option>
										<option id="4" value="8:30">8:30</option>
										<option id="5" value="9:00">9:00</option>
										<option id="6" value="9:30">9:30</option>
										<option id="7" value="10:00">10:00</option>
										<option id="8" value="10:30">10:30</option>
										<option id="9" value="11:00">11:00</option>
										<option id="10" value="11:30">11:30</option>
										<option id="11" value="12:00">12:00</option>
										<option id="12" value="12:30">12:30</option>
										<option id="13" value="13:00">13:00</option>
										<option id="14" value="13:30">13:30</option>
										<option id="15" value="14:00">14:00</option>
										<option id="16" value="14:30">14:30</option>
										<option id="17" value="15:00">15:00</option>
										<option id="18" value="15:30">15:30</option>
										<option id="19" value="16:00">16:00</option>
									</select>
									
									<label for="time">Fin cour</label>
									<select id="heureF" name="heureF[]" required>
										<option id="3" value="8:00">8:00</option>
										<option id="4" value="8:30">8:30</option>
										<option id="5" value="9:00">9:00</option>
										<option id="6" value="9:30">9:30</option>
										<option id="7" value="10:00">10:00</option>
										<option id="8" value="10:30">10:30</option>
										<option id="9" value="11:00">11:00</option>
										<option id="10" value="11:30">11:30</option>
										<option id="11" value="12:00">12:00</option>
										<option id="12" value="12:30">12:30</option>
										<option id="13" value="13:00">13:00</option>
										<option id="14" value="13:30">13:30</option>
										<option id="15" value="14:00">14:00</option>
										<option id="16" value="14:30">14:30</option>
										<option id="17" value="15:00">15:00</option>
										<option id="18" value="15:30">15:30</option>
										<option id="19" value="16:00">16:00</option>
										<option id="20" value="16:30">16:30</option>
										<option id="21" value="17:00">17:00</option>
									</select>
								
								</div>
							</div>
						</div>


					
						<div class="button">
							<a href="http://localhost/ProjetPPE/view/menu"><input type="button" name="time" value='Annulé'></a>
							<input type="submit" value="Valider">
						</div>

					</form>
					</div>
        </div>
      </div>
    </div>
    
  </body>
</html>