<?php

$host = "localhost";
$username ="root";
$password = null;


try {
    $conn = new PDO("mysql:host=$host; dbname=college",$username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "connection successful";
} catch (\Throwable $th) {
    echo "connection failed $err->getMessage()";
}
?>

