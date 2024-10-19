<?php
// Datos de conexion a la base de datos
$servername = "aws.connect.psdb.cloud"; // Nombre del servidor
$username = "9rszb89iytyx09sz08nl"; // Nombre Usuario
$password = "pscale_pw_sWCnlwpfma8gtG9HZCgG8QYZOZFzRntgJDvbi5obdVU"; // Contraseña
$database = "ecoprospero_db"; // Nombre base de datos

$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexion
if ($conn -> connect_error){
    die("Error en la conexión: ".$conn -> connect_error);
}
?>