<?php
$serverName ="localhost";
$username   ="root";
$password   ="";
$dbname     ="ems"

$connection = mysqli_connect($serverName, $username, $password, $dbName);
if($connection){
         echo "Connected";
   }
     else{
         die("Something went wrong". mysqli_connect_error($connection));
   }
?>
