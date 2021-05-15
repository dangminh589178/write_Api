<?php
include 'connection.php';
$con = OpenCon();
echo "Connected Successfully";
CloseCon($con);
?>