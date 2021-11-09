<?php
if (!isset($_POST['userID']) || !isset($_POST['password']))
{
	echo("<p><b>Service: Il faut un identifiant et un mot passe pour accédé au site.</b> : <script>alert('Oups une erreur c\'est produite')</script></p>");
	
	// Arrête l'exécution de PHP
  return;
}
?>

<h1>Message bien reçu !</h1>
        
<div class="card">
    
    <div class="card-body">
        <h5 class="card-title">Rappel de vos informations</h5>
        <p class="card-text"><b>Email</b> : <?php echo $_POST['userID']; ?></p>
        <p class="card-text"><b>Message</b> : <?php echo $_POST['password']; ?></p>
    </div>
</div>