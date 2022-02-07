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
    <link rel="stylesheet" type="text/css" href="../../css/profilemodif.css">
  </head>
  
  <body>
    <?php include_once('../model/navigation.php'); ?>

    <div class="main">

      <?php include_once('../model/topbar.php'); ?>
      

      <div class="details">
        <div class="recentOrders">
          <table>
            <thead>
              <tr>
                <td>Infos</td>
                <td><?php echo $_SESSION['userInfo']['matter']; ?></td>
                <td>Modifier</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Pseudo</td>
                <td><?php echo $_SESSION['userInfo']['pseudo']; ?></td>
              </tr>
              <tr>
                <td>Nom</td>
                <td><?php echo $_SESSION['userInfo']['nom']; ?></td>
              </tr>
              <tr>
                <td>Prénom</td>
                <td><?php echo $_SESSION['userInfo']['prenom']; ?></td>
              </tr>
              <tr>
                <td>Téléphone</td>
                <td><?php echo $_SESSION['userInfo']['tel']; ?></td>
                <td><span class="status edit"><i class="fas fa-pencil-alt"></i></span></td>
              </tr>
              <tr>
                <td>Mail</td>
                <td><?php echo $_SESSION['userInfo']['email']; ?></td>
                <td><span class="status edit"><i class="fas fa-pencil-alt"></i></span></td>
              </tr>
              <tr>
                <td>Genre</td>
                <td><?php echo $_SESSION['userInfo']['sexe']; ?></td>
              </tr>
            </tbody>
          </table>
          <div class="cardHeader">
            <div class="pass">
              <a href="profile">
                <span class="icon"><i class="fas fa-user-alt"></i></span>
                <span class="title">Retourné vers votre profile</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- wesh les relou -->
  </body>
</html>