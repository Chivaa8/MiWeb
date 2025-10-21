<?php
$servername = "db";
$username = "user";
$password = "password";
$dbname = "demo";

// Crear conexió
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprovar connexió
if ($conn->connect_error) {
    die("<h1>Connexió fallida: " . $conn->connect_error . "</h1>");
}
echo "<h1> Felicidades!</h1>";
echo "<h1>Connexió exitosa a la Base de Dades!</h1>";

$conn->close();
?>
