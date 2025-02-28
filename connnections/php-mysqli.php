<?php

    $host ="localhost";
    $username = "root";
    $password = null;
    $database = "college";

    $conn = new mysqli($host, $username, $password, $database);
    if($conn->connect_error){
        die("some error occured".$conn->connect_error);
    }else{
        echo "connection to  database successful!";
    }

    $result = $conn->query("show tables")->fetch_all();
    echo "<br/>";
    print_r($result);
?>