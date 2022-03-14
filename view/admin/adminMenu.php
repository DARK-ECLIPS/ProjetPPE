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
          <a href="./utilisateurs">
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

          <a href="./creneaux">
            <div class="card">
              <div>
                <div class="name">Créneaux</div>
                <div class="cardName">Liste des cours des professseur</div>
              </div>
              <div class="iconBox">
                <i class="fas fa-book-reader"></i>
              </div>
            </div>
          </a>

          <a href="./matieres">
            <div class="card">
              <div>
                <div class="name">Matières</div>
                <div class="cardName">Liste des matieres de chaque classe</div>
              </div>
              <div class="iconBox">
                <i class="fas fa-book-reader"></i>
              </div>
            </div>
          </a>

          <a href="./classes">
            <div class="card">
              <div>
                <div class="name">Classes</div>
                <div class="cardName">Liste des classes de la BDD</div>
              </div>
              <div class="iconBox">
                <i class="far fa-comment-dots"></i>
              </div>
            </div>
          </a>
        </span>

        <span class="status edit">
          <a href="./ajoutBD/utilisateur">
            <div class="card">
              <div>
                <div class="name">Ajout Utilisateur</div>
                <div class="cardName">!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</div>
              </div>
              <div class="iconBox">
              <i class="fas fa-address-book"></i>
              </div>
            </div>
          </a>

          <a href="./ajoutBD/creneau">
            <div class="card">
              <div>
                <div class="name">Ajout Créneau</div>
                <div class="cardName">!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</div>
              </div>
              <div class="iconBox">
              <i class="fas fa-address-book"></i>
              </div>
            </div>
          </a>

          <a href="./ajoutBD/matiere">
            <div class="card">
              <div>
                <div class="name">Ajout Matière</div>
                <div class="cardName">!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</div>
              </div>
              <div class="iconBox">
                <i class="fas fa-book-reader"></i>
              </div>
            </div>
          </a>

          <a href="./ajoutBD/classe">
            <div class="card">
              <div>
                <div class="name">Ajout Classe</div>
                <div class="cardName">!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</div>
              </div>
              <div class="iconBox">
                <i class="fas fa-tasks"></i>
              </div>
            </div>
          </a>
        </span>

        <span class="status delete">
          <a href="./creneau">
            <div class="card">
              <div>
                <div class="name">???????????</div>
                <div class="cardName">???????????</div>
              </div>
              <div class="iconBox">
              <i class="fas fa-address-book"></i>
              </div>
            </div>
          </a>

          <a href="./matiere">
            <div class="card">
              <div>
                <div class="name">???????????</div>
                <div class="cardName">???????????</div>
              </div>
              <div class="iconBox">
                <i class="fas fa-book-reader"></i>
              </div>
            </div>
          </a>

          <div class="card">
            <div>
              <div class="name">???????????</div>
              <div class="cardName">???????????</div>
            </div>
            <div class="iconBox">
              <i class="far fa-comment-dots"></i>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="name">???????????</div>
              <div class="cardName">???????????</div>
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