<!doctype html>
<html lang="fr">
	
	<?php

		session_start();
		if (!$_SESSION["userInfo"]) {
			echo '<meta http-equiv="refresh" content="0;URL=view/login.php">';
		} else {
	?>

	<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Responsive Admin Dashboad</title> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" type="text/css" href="model/assets/css/navigation.css">
	</head>
  
  <body>
    <?php include_once('model/templates/navigation.php'); ?>
    <div class="main">
      <?php include_once('model/templates/topbar.php'); ?>

			<?php
				if ($_GET['OperaPPE'] == "menu") {
					include_once('view/menu.php');
			?>
		
			<head>
				<title>Dashboad</title>
				<link rel="stylesheet" type="text/css" href="css/menu.css">
			</head>
			<?php
				} else if ($_GET['OperaPPE'] == "reservation") {
					include_once('view/reservation.php');
			?>

			<head>
				<title>Réservation</title>
				<link rel="stylesheet" type="text/css" href="css/reservation.css">
			</head>

			<?php
				} else if ($_GET['OperaPPE'] == "profile") {	
					
					if ($_GET['Action'] == "password") {
						include_once('view/profilePassword.php');
						?>
						
						<head>
							<title>Profile Password</title>
							<link rel="stylesheet" type="text/css" href="css/profilePassword.css">
						</head>
						
						<?php
					} else {
						include_once('view/profile.php');
						?>

						<head>
							<title>Profile</title>
							<link rel="stylesheet" type="text/css" href="css/profile.css">
						</head>
	
						<?php
					}
				} else if ($_GET['OperaPPE'] == "admin") {

					if ($_GET['Action'] == 'classes') {

						include_once('view/admin/classes.php');
						?>

						<head>
							<title>Admin Classe</title>
							<link rel="stylesheet" type="text/css" href="model/assets/css/tableScroll.css">
						</head>

						<?php
					} else if ($_GET['Action'] == 'creneaux') {

						include_once('view/admin/creneaux.php');
						?>

						<head>
							<title>Admin Creneau</title>
							<link rel="stylesheet" type="text/css" href="model/assets/css/tableScroll.css">
							<link rel="stylesheet" type="text/css" href="css/creneaux.css">
						</head>

						<?php
					} else if ($_GET['Action'] == 'matieres') {

						include_once('view/admin/matieres.php');
						?>

						<head>
							<title>Admin Matiere</title>
							<link rel="stylesheet" type="text/css" href="model/assets/css/tableScroll.css">
						</head>

						<?php
					} else if ($_GET['Action'] == 'utilisateurs') {

						include_once('view/admin/utilisateurs.php');
						?>

							<head>
								<title>Admin Utilisateur</title>
								<link rel="stylesheet" type="text/css" href="model/assets/css/tableScroll.css">
							</head>

						<?php
					} else if ($_GET['Action'] == 'updateData') {

						include_once('view/admin/updateData.php');
						?>

							<head>
								<title>Admin Update Data</title>
								<link rel="stylesheet" type="text/css" href="css/update.css">
							</head>

						<?php
					} else if ($_GET['Action'] == 'ajoutBD') {

						if ($_GET['Option'] == 'utilisateur') {

							include_once('view/admin/ajoutBD/utilisateur.php');
							?>

								<head>
									<title>AdminBD  Utilisateur</title>
									<link rel="stylesheet" type="text/css" href="css/usersAdd.css">
								</head>

							<?php
						} else if ($_GET['Option'] == 'creneau') {

							include_once('view/admin/ajoutBD/creneau.php');
							?>

								<head>
									<title>AdminBD  Creneau</title>
									<link rel="stylesheet" type="text/css" href="css/creneau.css">
								</head>

							<?php
						} else if ($_GET['Option'] == 'matiere') {

							include_once('view/admin/ajoutBD/matiere.php');
							?>

								<head>
									<title>AdminBD  Matiere</title>
									<link rel="stylesheet" type="text/css" href="css/matiere.css">
								</head>

							<?php
						} else if ($_GET['Option'] == 'classe') {

							include_once('view/admin/ajoutBD/classe.php');
							?>

								<head>
									<title>AdminBD  Classe</title>
									<link rel="stylesheet" type="text/css" href="css/matiere.css">
								</head>

							<?php
						}
					} else {
					
						include_once('view/admin/menu.php');
						?>

						<head>
							<title>Admin Dashboad</title>
							<link rel="stylesheet" type="text/css" href="css/adminMenu.css">
						</head>
						<?php
					}
				}
				?>
















		<?php 
			// if (isset($_GET['OperaPPE'])) {
			// 	if ($_GET['OperaPPE'] == "modification") {
		?>

		<?php 
				// }
					// elseif ($_GET['OperaPPE'] == "inscription") {
		?>
		
		<?php
				// } elseif ($_GET['OperaPPE'] == "menu") {
					// echo '<meta http-equiv="refresh" content="0;URL=view/menu.php">';
		?>
		
		<?php
				// }
			// }
			// else {
				// echo '<meta http-equiv="refresh" content="0;URL=view/login.php">';
			// }
		?>

		</div>
	</body>

	<?php
		}
	?>
</html>