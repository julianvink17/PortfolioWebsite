<?php
$name   = $_POST["name"];
$email      = $_POST["email"];
$message   = $_POST["message"];
require_once "connect.php";
$sql = $conn->prepare("INSERT INTO message VALUES(:name, :email, :message)");
$sql->execute([
    "name" => $name,
    "email"     => $email,
    "message"     => $message,
]);
header("Location: http://julianvink-portfolio.nl/");
?>
