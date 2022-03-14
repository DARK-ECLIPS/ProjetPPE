<!DOCTYPE html>
<?php
session_start();
include_once('../../../model/controllers/CheckUp.php');
?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboad</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" type="text/css" href="../../../css/matiere.css">
  </head>
  
  <body>
    <?php include_once('../../model/navigation.php'); ?>

    <div class="main">
      <?php include_once('../../model/topbar.php'); ?>
      
      <div class="details">
      	<?php include_once('../../../model/assets/sass/snow.html'); ?>
        
				<div class="recentOrders">
          <div class="cardHeader">
          <form method="post" action="http://localhost/ProjetPPE/model/controllers/requetes.php?OperaPPE=4441524b2045434e454c4953&Add=classe">
					<input type="hidden" name="OperaPPE" value="classe">

						<h2>Ajout Classe</h2>

						<div class="content">

							<div class="row">
								<div class="checkbox">
									<div>
										<input type="radio" id="case1" name="enseignement" value="COLLEGE" onchange="matiereMenu('checkbox', this)">
										<label for="case1">Collège</label>
									</div>
									<div>
										<input type="radio" id="case2" name="enseignement" value="LYCEE" onchange="matiereMenu('checkbox', this)">
										<label for="case2">Lycée</label>
									</div>
									<div>
										<input type="radio" id="case3" name="enseignement" value="BTS" onchange="matiereMenu('checkbox', this)">
										<label for="case3">BTS</label>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="select">
									<label>Classe :</label>
									<input type="text" placeholder=" Nom de la Classe" name="classe" required>
								</div>
							</div>
							
							<div class="row">
								<div class="select">
									<label>Elève :</label>
									<input type="number" placeholder=" Nombre d'élève" name="eleve" min="0" required>
								</div>
							</div>
							
						</div>
					
						<div class="button">
							<a href="http://localhost/ProjetPPE/view/admin/classes""><input type="button" name="time" value='Annulé'></a>
							<input type="submit" value="Valider">
						</div>

					</form>
					</div>
        </div>
      </div>
    </div>
    
  </body>
</html>