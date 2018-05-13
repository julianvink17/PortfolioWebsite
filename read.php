<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>read.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
require_once "connect.php";
$sql = $conn->prepare("select name, email, message from message");
$sql->execute();
echo "<div class='terug'>";
echo "<a href='index.html'> Terug naar het portfolio </a>";
echo "</div>";
echo "<table>";
echo "<tr style= 'border-bottom: solid 1px'>";
echo "<th style='background-color: #6071f3'>Naam</th>";
echo "<th style='background-color: #6071f3'>E-mail</th>";
echo "<th style='background-color: #6071f3'>Bericht</th>";

echo "</tr>";
foreach ($sql as $rij) {
    echo "<tr style='text-align: center'>";
    echo "<td style='background-color: #ccf6e7'>" . $rij["name"] . "</td>";
    echo "<td style='background-color: #ccf6e7'>" . $rij["email"] . "</td>";
    echo "<td>" . $rij["message"] . "</td>";
    echo "</tr>";
}
echo "</table><br/>";

?>
</body>
</html>
