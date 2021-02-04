<?php
$con= mysqli_connect("localhost","root","12345","benefit") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
?>