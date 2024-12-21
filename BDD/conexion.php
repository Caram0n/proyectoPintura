<?php
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "nombre_base_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

?>