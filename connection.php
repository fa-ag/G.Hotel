<?php
$servername = "localhost";
$username = "root";

try {
    $con = new PDO("mysql:host=localhost;dbname=hotel", $username);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>