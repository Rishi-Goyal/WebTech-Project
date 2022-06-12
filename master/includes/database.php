<?php
    
$dbhost = "localhost";
$dbUser = "root";
$dbName = "project";
$dbPass = "root";
// connection to database.
$conn =  mysqli_connect($dbhost,$dbUser,$dbPass,$dbName);

if(!$conn){
    die("Database connection failed !");
}
    
?>