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
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
  </head>
  
  <body>
    <?php include_once('model/navigation.php'); ?>

    <div class="main">

      <?php include_once('model/topbar.php'); ?>

      <div class="cardBox">
        <div class="card">
          <div>
            <div class="numbers">1,042</div>
            <div class="cardName">Réservation du Jour</div>
          </div>
          <div class="iconBox">
            <i class="far fa-eye"></i>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="numbers">?</div>
            <div class="cardName">?</div>
          </div>
          <div class="iconBox">
            <i class="fas fa-question"></i>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="numbers">208</div>
            <div class="cardName">Discution</div>
          </div>
          <div class="iconBox">
            <i class="far fa-comment-dots"></i>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="numbers">6,042</div>
            <div class="cardName">Historique des Réservations</div>
          </div>
          <div class="iconBox">
            <i class="fas fa-tasks"></i>
          </div>
        </div>
      </div>

      <div class="details">
        <div class="recentOrders">
          <div class="cardHeader">
            <h2>Dernières commandes</h2>
            <a href="#" class="btn">View All</a>
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
        <div class="recentCustomers">
          <div class="cardHeader">
            <h2>Récentes Demande</h2>
          </div>
          <table>
            <tbody>
              <tr>
                <td width="60px"><div class="imgBx"><img src="./test/wolf.jpeg"></div></td>
                <td><h4>Dark<br><span>Anglais</span></h4></td>
              </tr>
              <tr>
                <td width="60px"><div class="imgBx"><img src="./test/wolf2.jpg"></div></td>
                <td><h4>Trixie<br><span>Fraçais</span></h4></td>
              </tr>
              <tr>
                <td width="60px"><div class="imgBx"><img src="./test/wolf3.png"></div></td>
                <td><h4>DARKNESS<br><span>Maths</span></h4></td>
              </tr>
              <tr>
                <td width="60px"><div class="imgBx"><img src="./test/wolf4.png"></div></td>
                <td><h4>Ouioui<br><span>Informatique</span></h4></td>
              </tr>
              <tr>
                <td width="60px"><div class="imgBx"><img src="./test/wolf5.png"></div></td>
                <td><h4>Github<br><span>Unknown</span></h4></td>
              </tr>
              <tr>
                <td width="60px"><div class="imgBx"><img src="./test/wolf6.png"></div></td>
                <td><h4>Destock<br><span>Unknown</span></h4></td>
              </tr>
              <tr>
                <td width="60px"><div class="imgBx"><img src="./test/wolf7.png"></div></td>
                <td><h4>Earleam<br><span>Espagnole</span></h4></td>
              </tr>
              <tr>
                <td width="60px"><div class="imgBx"><img src="./test/wolf8.png"></div></td>
                <td><h4>Santa Ecnelis<br><span>Administrateur</span></h4></td>
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
</html>

<!-- Css + Html | 8H20-->