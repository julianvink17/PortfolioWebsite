<?php
$servername = "localhost";
$dbname = "julianvi";
$username = "julianvi";
$password = "PAstademanteiga11";
try
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
        $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    echo "Connectie mislukt: " . $e->getMessage();
}