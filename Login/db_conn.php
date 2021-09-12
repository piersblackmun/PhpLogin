<?php

    $sname = "localhost";
    $unmae ="root";
    $password = "";
    
    $db_name = "test_db";       //phpmyadmin params -- id (AI, PK), user_name, password, name
    
    $conn = mysqli_connect($sname, $unmae, $password, $db_name);
    
   
    if (!$conn) {
        echo "Connection Failed";
    }
    
?>