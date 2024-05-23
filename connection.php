<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "electric_car";

    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Check if connection error
    if($conn->connect_error){
        die("Connection failed : ".$conn->connect_error);
    }

?>