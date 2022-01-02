<?php
if (!isset($_POST['userID']) || !isset($_POST['password']))
{
	echo("<p><b>Service: Il faut un identifiant et un mot passe pour accédé au site.</b> <script>alert('Oups une erreur c\'est produite')</script></p>");
  return;
}
?>