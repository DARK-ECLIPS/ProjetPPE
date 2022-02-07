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
    <link rel="stylesheet" type="text/css" href="../../css/profile.css">
  </head>
  
  <body>
    <?php include_once('../model/navigation.php'); ?>

    <div class="main">

      <?php include_once('../model/topbar.php'); ?>
      

      <div class="details">
        <div class="recentOrders">
          <div class="cardHeader">
            <div class="user">
              <a>
                <img src="<?php echo $_SESSION['userInfo']['avatar']; ?>" />
              </a>
              <a href="avatar">
                <span class="icon"><i class="fas fa-pencil-alt"></i></span>
              </a>
            </div>
            <div class="pass">
              <a href="password">
                <span class="icon"><i class="fas fa-unlock-alt"></i></span>
                <span class="title">Modifier le mot de passe</span>
              </a>
            </div>
            <div class="pass">
              <a href="profilemodif">
                <span class="icon"><i class="fas fa-user-edit"></i></span>
                <span class="title">Modifier les information de compte</span>
              </a>
            </div>
          </div>
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
              </tr>
              <tr>
                <td>Mail</td>
                <td><?php echo $_SESSION['userInfo']['email']; ?></td>
              </tr>
              <tr>
                <td>Genre</td>
                <td><?php echo $_SESSION['userInfo']['sexe']; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- wesh les relou -->
  </body>
</html>