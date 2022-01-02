<!DOCTYPE html>
<?php
session_start();
// Include form submission script
include_once 'classes/upload.php';
?>
<!-- echo ($_SESSION['userInfo']['nom']) -->
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboad</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/profileAvatar.css">
  </head>
  
  <body>
    <?php include_once('model/navigation.php'); ?>

    <div class="main">

      <?php include_once('model/topbar.php'); ?>
      

      <div class="details">
        <div class="recentOrders">
          <div class="cardHeader">
            <a class="userImage"><img src="data:image/jpg;charset=ut8;base64,<?php echo base64_encode($_SESSION['avatarInfo']['image']); ?>" /></a>
            <form class="form" action="" method="post" enctype="multipart/form-data">
              <label for="file" class="label-file">Choisir une image</label>
              <input id="file" class="input-file" type="file" name='image'>
              <input type="submit" name="submit" class="btn" value="upload">
            </form>
          </div>
            <a class=warning>L'image selectioné n'apparaîtra qu'après avoir apuiyer sur le boutton upload</a>
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