<!DOCTYPE html>
<?php
session_start();
// Include form submission script
include_once '../classes/upload.php';
include_once('../../controllers/CheckUp.php');
?>
<!-- echo ($_SESSION['userInfo']['nom']) -->
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboad</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" type="text/css" href="../../css/profileAvatar.css">
  </head>
  
  <body>
    <?php include_once('../model/navigation.php'); ?>

    <div class="main">

      <?php include_once('../model/topbar.php'); ?>
      

      <div class="details">
        <div class="recentOrders">
          <div class="cardHeader">
            <a class="userImage"><img src="data:image/jpg;charset=ut8;base64,<?php echo base64_encode($_SESSION['userInfo']['avatar']); ?>" /></a>
            <form class="form" action="" method="post" enctype="multipart/form-data">
              <label for="file" class="label-file">Choisir une image</label>
              <input id="file" class="input-file" type="file" name='image'>
              <input type="submit" name="submit" class="btn" value="upload">
            </form>
          </div>
          <div class=warning>
            <a>Selectioner un document de type image pour votre photo profile (jpg, png, jpeg, jfif, tiff, webp, ico)<br><br>
            L'image selectioné n'apparaîtra qu'après avoir apuiyer sur le boutton <u>upload</u></a><br><br>
            <a>Attention à ne pas utiliser d'image comportant du contenue sensible.<br>
            En cas de non-respect votre compte peut être temporairement désactivé et sanctionné</a>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>