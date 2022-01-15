<!doctype html>
<html lang="fr">
<body>
	<?php 
		if (isset($_GET['OperaPPE'])) {
			if ($_GET['OperaPPE'] == "modification") {
	?>

	<?php 
			}
		  	elseif ($_GET['OperaPPE'] == "inscription") {
	?>
  
	<?php
			} elseif ($_GET['OperaPPE'] == "menu") {
				echo '<meta http-equiv="refresh" content="0;URL=view/menu">';
	?>
  
	<?php
			}
		}
		else {
			echo '<meta http-equiv="refresh" content="0;URL=view/login">';
		}
	?>
</body>
</html>