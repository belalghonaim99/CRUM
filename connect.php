<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPassword ="";
$dbName = "crud"; 
$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
if(!$conn)
{
    die("Something Went Wrong");
}


?>