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
    <link rel="stylesheet" type="text/css" href="../../css/adminMenu.css">
  </head>
  
  <body>
    <?php include_once('../model/navigation.php'); ?>

    <div class="main">

      <?php include_once('../model/topbar.php'); ?>

      <div class="cardBox">

        <span class="status add">
          <a href="./users">
            <div class="card">
              <div>
                <div class="name">Utilisateurs</div>
                <div class="cardName">Liste des utilisateurs de la BDD</div>
              </div>
              <div class="iconBox">
              <i class="fas fa-address-book"></i>
              </div>
            </div>
          </a>

          <a href="./matieres">
            <div class="card">
              <div>
                <div class="name">Matières</div>
                <div class="cardName">Ajouter une matiere à un classe</div>
              </div>
              <div class="iconBox">
                <i class="fas fa-book-reader"></i>
              </div>
            </div>
          </a>

          <div class="card">
            <div>
              <div class="name">208</div>
              <div class="cardName">Discution</div>
            </div>
            <div class="iconBox">
              <i class="far fa-comment-dots"></i>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="name">6,042</div>
              <div class="cardName">Historique des Réservations</div>
            </div>
            <div class="iconBox">
              <i class="fas fa-tasks"></i>
            </div>
          </div>
        </span>

        <span class="status edit">
          <a href="./creneau">
            <div class="card">
              <div>
                <div class="name">Ajout Créneau</div>
                <div class="cardName">Attribuer un cours à un professeur</div>
              </div>
              <div class="iconBox">
              <i class="fas fa-address-book"></i>
              </div>
            </div>
          </a>

          <a href="./matiere">
            <div class="card">
              <div>
                <div class="name">Ajout Matière</div>
                <div class="cardName">Ajouter une matiere à un classe</div>
              </div>
              <div class="iconBox">
                <i class="fas fa-book-reader"></i>
              </div>
            </div>
          </a>

          <div class="card">
            <div>
              <div class="name">208</div>
              <div class="cardName">Discution</div>
            </div>
            <div class="iconBox">
              <i class="far fa-comment-dots"></i>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="name">6,042</div>
              <div class="cardName">Historique des Réservations</div>
            </div>
            <div class="iconBox">
              <i class="fas fa-tasks"></i>
            </div>
          </div>
        </span>

        <span class="status delete">
          <a href="./creneau">
            <div class="card">
              <div>
                <div class="name">Ajout Créneau</div>
                <div class="cardName">Attribuer un cours à un professeur</div>
              </div>
              <div class="iconBox">
              <i class="fas fa-address-book"></i>
              </div>
            </div>
          </a>

          <a href="./matiere">
            <div class="card">
              <div>
                <div class="name">Ajout Matière</div>
                <div class="cardName">Ajouter une matiere à un classe</div>
              </div>
              <div class="iconBox">
                <i class="fas fa-book-reader"></i>
              </div>
            </div>
          </a>

          <div class="card">
            <div>
              <div class="name">208</div>
              <div class="cardName">Discution</div>
            </div>
            <div class="iconBox">
              <i class="far fa-comment-dots"></i>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="name">6,042</div>
              <div class="cardName">Historique des Réservations</div>
            </div>
            <div class="iconBox">
              <i class="fas fa-tasks"></i>
            </div>
          </div>
        </span>

      </div>

    </div>
    
  </body>
</html>