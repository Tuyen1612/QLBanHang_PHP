<!-- KẾT NỐI DATABASE -->
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database= "sale";

// Create connection
$conn =  new PDO("mysql:host=$servername;dbname=$database;charset=utf8mb4", $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>
