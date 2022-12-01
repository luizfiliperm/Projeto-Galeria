<?php

    $serverName = "localhost";
    $dbUserName = "root";
    $dBPassword = "";
    $dBName = "meubanco";

    $conn = mysqli_connect($serverName, $dbUserName, $dBPassword, $dBName);
    
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

?>