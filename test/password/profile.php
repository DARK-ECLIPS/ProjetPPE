<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>IT SourceCode</title>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="libs/style.css">
  </head>
  <?php
  session_start();
$row=$_SESSION['userInfo'];
  ?>
  <h1>User Profile</h1>
<div class="profile-input-field">
        <h3>Please Fill-out All Fields</h3>
          <div class="form-group">
            <label for="sexe">Genre:</label>

            <select name="Genre" id="sexe">
                <option value="">Aucun</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
          </div>
        <form method="post" action="#" >
          <div class="form-group">
            <label>Pseudo</label>
            <input type="text" class="form-control" name="pseudo" style="width:20em;" placeholder="Enter your Fullname" value="<?php echo $row['pseudo']; ?>" required />
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" style="width:20em;" placeholder="Enter your email" value="<?php echo $row['email']; ?>">
          </div>
          <div class="form-group">
            <label>Mot de Passe</label>
            <input type="password" class="form-control" name="password" style="width:20em;" required placeholder="Enter your password" value="<?php echo $row['mdp']; ?>"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" style="width:20em; margin:0;"><br><br>
            <center>
             <a href="logout.php">Log out</a>
           </center>
          </div>
        </form>
      </div>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $fullname = $_POST['fname'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $address = $_POST['address'];
      $query = "UPDATE users SET full_name = '$fullname',
                      gender = '$gender', age = $age, address = '$address'
                      WHERE user_id = '$id'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "index.php";
        </script>
        <?php
             }               
?>