<!DOCTYPE html>
<?php
session_start()
?>
<!-- echo ($_SESSION['userInfo']['nom']) -->
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboad</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
  </head>
  
  <body>
    <?php include_once('model/navigation.php'); ?>

    <div class="main">

      <?php include_once('model/topbar.php'); ?>
      

      <div class="details">
        <div class="recentOrders">
          <div class="cardHeader">
            <div class="user">
              <a">
                <img src="data:image/jpg;charset=ut8;base64,<?php echo base64_encode($_SESSION['avatarInfo']['image']); ?>" />
              </a>
              <a href="avatar.php">
                <span class="icon"><i class="fas fa-pencil-alt"></i></span>
              </a>
            </div>
          </div>
          <table>
            <thead>
              <tr>
                <td>Name</td>
                <td>Professeur</td>
                <td>Date</td>
                <td>Status</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Projecteur</td>
                <td>Ouioui</td>
                <td>03|Février</td>
                <td><span class="status delivered">Rendue</span></td>
              </tr>
              <tr>
                <td>Multiprise</td>
                <td>Trixie</td>
                <td>01|Avril</td>
                <td><span class="status pending">En attente</span></td>
              </tr>
              <tr>
                <td>Dérouleur</td>
                <td>Dark</td>
                <td>10|Novembre</td>
                <td><span class="status return">Non rendu</span></td>
              </tr>
              <tr>
                <td>Ordinateur</td>
                <td>Earleam</td>
                <td>02|Janvier</td>
                <td><span class="status inprogress">En utilisation</span></td>
              </tr>
              <tr>
                <td>Projecteur</td>
                <td>Ouioui</td>
                <td>10|Mai</td>
                <td><span class="status delivered">Rendue</span></td>
              </tr>
              <tr>
                <td>Multiprise</td>
                <td>Trixie</td>
                <td>15|Juillet</td>
                <td><span class="status pending">En attente</span></td>
              </tr>
              <tr>
                <td>Dérouleur</td>
                <td>Dark</td>
                <td>01|Avril</td>
                <td><span class="status return">Non rendu</span></td>
              </tr>
              <tr>
                <td>Ordinateur</td>
                <td>Earleam</td>
                <td>31|Janvier</td>
                <td><span class="status inprogress">En utilisation</span></td>
              </tr>
              <tr>
                <td>Apple Watch</td>
                <td>Santa Ecnelis</td>
                <td>75|Décembre</td>
                <td><span class="status delivered">Rendue</span></td>
              </tr>
            </tbody>
          </table>
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