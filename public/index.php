<?php
$servername = "db";      // Nom del servei MySQL a docker-compose
$username = "user";      
$password = "password";
$dbname = "demo";

// Crear connexió
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprovar connexió
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}
echo "<h1>Connexió exitosa a la Base de Dades!</h1>";

// Tancar connexió
$conn->close();
?>