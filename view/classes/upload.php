<?php
// Include the database configuration file

require '../model/classes/ConnexionDB.php';
require '../model/classes/ActionsDB.php';

$conn_db = new ConnexionDB();

// Création d'un objet qui va gérer les actions dans la BD
$base_donnees = new ActionsDB($conn_db);
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image));
            $id = $_SESSION['avatarInfo']['id'];
         
            // Insert image content into database
            $insert = $conn_db->getDB()->query("UPDATE images SET image = '$imgContent', updated = NOW() WHERE id = '$id'");
            $base_donnees->updateSession();
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 

?>