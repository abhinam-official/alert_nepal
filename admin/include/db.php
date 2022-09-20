<?php
ob_start();
$host = "localhost";
$dbuser = "root";
$dbpassword= "";
$dbname = "alert_nepal";

$conn = new mysqli($host , $dbuser, $dbpassword , $dbname);

if($conn->connect_error){
    die("Error: Connection Failed" . $conn->connect_error);
}



?>

