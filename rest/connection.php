<?php

$conn = mysqli_connect("localhost","root","","qr_database");
    if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
   
?>