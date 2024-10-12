<?php
// Datos de conexion a la base de datos
$servername = "https://aws.connect.psdb.cloud/"; // Nombre del servidor
$username = "dpuv2bql7cfimd6ftb7r"; // Nombre Usuario
$password = "pscale_pw_SpnrO5SdbRan4k4o6Ug9nlRY0EysuY1QbLSVM9byTnH"; // Contraseña
$database = "wud_db"; // Nombre base de datos

$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexion
if ($conn -> connect_error){
    die("Error en la conexión: ".$conn -> connect_error);
}
?>