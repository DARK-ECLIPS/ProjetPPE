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
    <link rel="stylesheet" type="text/css" href="../css/slot.css">
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
										<option value="select">⏱</option>
									</select>
								</div>
							</div>
							
							<div class="row">
								<div class="select">
									<label for="country">Matiere</label>
									<select id="country" name="country">
										<option value="australia">Australia</option>
										<option value="canada">Canada</option>
										<option value="usa">USA</option>
									</select>
								</div>
							</div>
							
							<div class="row">
								<div class="select">
									<label for="country">Salle de classe</label>
									<select id="country" name="country">
										<option value="australia">Australia</option>
										<option value="canada">Canada</option>
										<option value="usa">USA</option>
									</select>
								</div>
							</div>
							
							<div class="row">
								<div class="select">
									<label for="country">Jour</label>
									<select id="country" name="country">
										<option value="australia">Australia</option>
										<option value="canada">Canada</option>
										<option value="usa">USA</option>
									</select>
								</div>
							</div>
							
							<div class="row">
								<div class="select">
									<label for="country">Heure début</label>
									<select id="country" name="country">
										<option value="australia">Australia</option>
										<option value="canada">Canada</option>
										<option value="usa">USA</option>
									</select>
								</div>
							</div>
							
							<div class="row">
								<div class="select">
									<label for="country">Heure fin</label>
									<select id="country" name="country">
										<option value="australia">Australia</option>
										<option value="canada">Canada</option>
										<option value="usa">USA</option>
									</select>
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