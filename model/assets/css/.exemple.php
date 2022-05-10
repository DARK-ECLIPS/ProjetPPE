<!DOCTYPE html>
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboad</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" type="text/css" href="tableScroll.css">
  </head>
  
  <body onload="adminMenu(), creanauMenu('prof')">
    <?php include_once('../../../view/model/navigation.php'); ?>

    <div class="main">
      <?php include_once('../../../view/model/topbar.php'); ?>

      <div class="details">
      	<?php include_once('../../../model/assets/sass/snow.html'); ?>
        
				<div class="recentOrders">
          <div class="cardHeader">

						<h1>Titre</h1>
						<h2>Titre</h2>

						<table class="scrolldown">
							<thead>
									<tr>
										<th>Champ A</th>
										<th>Champ B</th>
										<th>Champ C</th>
										<th>Champ D</th>
										<th>Champ E</th>
									</tr>
							</thead>
							<tbody>
								<?php
								$var = 0;
									while ($var !== 10) {
										?>
											<tr>
												<td>Val A<?php echo $var ?></td>
												<td>Val B<?php echo $var ?></td>
												<td>Val C<?php echo $var ?></td>

												<td align="center">
													<a href="">
														<i class="fas fa-edit"></i>
													</a>
												</td>

												<td align="center">
													<a href="">
														<i class="fas fa-trash-alt"></i>
													</a>
												</td>
											</tr>
											<?php $var += 1 ?>
											<?php
									} ?>
							</tbody>
						</table>


					
						<div class="button">
							<a href="http://localhost/ProjetPPE/view/admin/adminMenu"><input type="button" value='Retour'></a>
							<a href="http://localhost/ProjetPPE/view/admin/matiereAdd"><input type="submit" value="Ajouter"></a>
						</div>

					</div>
        </div>
      </div>
    </div>
    
  </body>
</html>