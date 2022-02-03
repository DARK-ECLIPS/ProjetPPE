<!DOCTYPE html>
<?php
session_start();
?>
<!-- echo ($_SESSION['userInfo']['nom']) -->
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/reservation.css">
  </head>
  
  <body>
    <?php include_once('model/navigation.php'); ?>

    <div class="main">

      <?php include_once('model/topbar.php'); ?>
      

      <div class="details">
        <div class="recentOrders">
            <center><h2>Réservation d'équipement</h2></center>
            
                <div class= "reserv-container">

                    <br><b for="profeseur">Professeur : </b>
                    <?php echo $_SESSION['userInfo']['nom']; ?>
                    <?php echo $_SESSION['userInfo']['prenom']; ?></br>

                    <br><b for="cours">Cours : </b>
                    <select name="cours" id="cours">
                        <option value="">--Veuillez choisir une option--</option>
                    </select> </br>

                    <br><b for="classe">Classe : </b>
                    <select name="classe" id="classe">
                        <option value="">--Veuillez choisir une option--</option>
                    </select> </br>

                    <br><b for="date">Date de réservation : </b>
                    <input type="date" id="date" /></br>

                    <br><b for=" H-reservation ">Heure de réservation : </b>
                    <input type="time" id=" H-reservation " /></br>
                
                    <br><b for="equipement">Equipement : </b>
                    <select name="equipement" id="equipement">
                        <option value="">--Veuillez choisir une option--</option>
                        <option value="">--Vidéo Projecteur--</option>
                        <option value="">--Multiprise--</option>
                        <option value="">--Ordinateur--</option>
                    </select> </br>
                    
                    <div class="ButtonBox">
                    <div class="button">
                        <br><input class="button" type="button" id="button-reserv" value="Réserver"></br>
                    </div>
                    <div class="button">
                        <br><input class="button" type="button" id="button-cancel" value="Annuler"></br>
                </div>
              </div>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
    <script src="http://localhost/ProjetPPE/js/toggleMenu.js"></script>
  
  </body>
</html>