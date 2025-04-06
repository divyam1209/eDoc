<?php
$servername = "localhoost";
$username = "root";  
$password = ""; 
$dbname = "db"; 

$database = new mysqli($servername, $username, $password, $dbname);

if ($database->connect_error) {
    die("Échec de la connexion : " . $database->connect_error);
}
?>

