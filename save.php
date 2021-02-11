<?php

include("proj_connection.php");

    $content1 = $_POST['content1']; //get posted data

     $sql = "INSERT INTO `news`(`nHeader`, `nDetails`) VALUES ('','$content1')";
     
    if (mysqli_query($sql,$con))
    {
        echo "yes";

    }

?>