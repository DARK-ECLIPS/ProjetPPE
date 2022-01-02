<?php
// Include form submission script
include 'upload.php';
?>
<!DOCTYPE html>

<head>
  <title>
  Store image in MySQL using PHP by CodexWorld  
  </title>
</head>

<body>
  <div class='container'>
    <h1>Upload and store image in database using php</h1>
    <div>
      <?php if(!empty($statusMsg)) {?>
        <p class="status"> <?php echo $status; ?> <?php echo $statusMsg; ?></p>
      <?php } ?>

      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="image">select image file:</label>
          <input type="file" name='image' class='form-control'>
        </div>

        <input type="submit" name="submit" class="btn-primary" value="upload">
      </form>

      <a href='view.php'>View uploaded image</a>
    </div>    
  </div>
</body>