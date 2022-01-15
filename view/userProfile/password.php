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
    <link rel="stylesheet" type="text/css" href="../../css/profilePassword.css">
  </head>
  
  <body>
    <?php include_once('../model/navigation.php'); ?>

    <div class="main">

      <?php include_once('../model/topbar.php'); ?>
      

      <div class="container">
        
        <h3 align="center">CHANGE PASSWORD</h3>
        
        <div><?php if(isset($message)) { echo $message; } ?></div>
        <div class=form>

        
          <form method="post" action="../../model/controllers/requetes.php?OperaPPE=4441524b2045434e454c4953">
            <input type="hidden" name="OperaPPE" value="password">
            <div class="inputBox">
                <input type="password" placeholder="Ancien mot de passe" name="currentPassword" id="currentPassword" required>
            </div>
            <div class="inputBox">
                <input type="password" placeholder="Nouveau mot de passe" name="newPassword" id="newPassword" required>
            </div>
            <div class="inputBox">
                <input type="password" placeholder="Confimer le mot de passe" name="confirmPassword" id="confirmPassword" required>
            </div>
            <div class="inputBox">
              <div class="bottom">
                <a href="./profile"><input type="button" value='Annulé' href='./profile.php'></a>
                <input type="submit" name="submit" value='Validé'>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      function toggleMenu() {
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');
        toggle.classList.toggle('active')
        navigation.classList.toggle('active')
        main.classList.toggle('active')
      }
    </script>
  </body>
</html>