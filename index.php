<?php
include 'data/getUserData.php';
$user = getUser('Dark Ecnelis');
$x = 0;

foreach ($user as $infos) {
  ?>
  <p>
    <?php echo $infos; ?>
  </p>
  <?php
  $x++;
}

?>