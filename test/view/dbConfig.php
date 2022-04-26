<?php  
// Database configuration  
$dbHost     = "192.168.1.72";  
$dbUsername = "root";  
$dbPassword = "";  
$dbName     = "projetppe";  

// Create database connection  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  
  
// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}