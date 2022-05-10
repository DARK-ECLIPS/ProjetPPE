<body onload="adminMenu()"></body>

<div class="topbar">
  <div class="toggle" onclick="toggleMenu()"></div>
  <div class="search">
    <label>
      <input type="text" placeholder="Search here">
      <i class="fas fa-search"></i>
    </label>
  </div>
  <div class="user">
    <a href="index.php?OperaPPE=profile">
      <img src="<?php echo $_SESSION['userInfo']['avatar']; ?>" />
    </a>
  </div>
</div>