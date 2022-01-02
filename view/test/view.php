<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// Get Image data from database
$sql = "SELECT image FROM images ORDER BY id DESC";
$result = $db->query($sql);
?>

<!DOCTYPE html>
<head>
    <title>
        Retrive image from database using PHP by CodexWorld
    </title>
</head>

<body>
    <div class="container">
        <h1>Retrive image from database using php</h1>

        <div class='gallery'>
            <?php if ($result->num_rows > 0) { ?>
            <div class ='img-box'>
                <?php while($row = $result->fetch_assoc()){ ?>
                    <img src="data:image/jpg;charset=ut8;base64,<?php echo base64_encode($row['image']); ?>" />
                <?php } ?>
            </div>
            <?php }else { ?>
            <p class='status error'>Image(s) not found...</p>
        <?php } ?>
        </div>
    </div>
    <a href="index.php">Upload Images</a>
    </div>
</body>