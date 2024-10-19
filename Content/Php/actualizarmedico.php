<?php
include 'ceonexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])){
    $id = $_POST['id'];
    $nombre = isset($_POST['nombre'] ? $_POST['nombre'] : null;)
    $especialidad = isset($_POST['especialidad'] ? $_POST['especialidad'] : null;)

    // Asegurate de que se actualice al menos un campo
    if ($nombre || $especialidad) {
        $fields = [];
        $params = [];
        $types .= ''; // Para almacenar parametros en consulta preparada
    }

    if ($nombre) {
        $fields[] = "nombre = ?";
        $params[] = $nombre;
        $types .= 's';
    }

    if ($especialidad) {
        $fields[] = "especialidad = ?";
        $params[] = $especialidad;
        $types .= 's';
    }

}
?>