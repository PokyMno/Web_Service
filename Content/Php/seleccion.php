<?php
    case 'actualizar';

    // Logica para actualizar medico
    echo '<h3>Actualizar medico</h3>';
    echo '<form action="actualizarmedico.php" method="post">';
    echo '<input type="text" name="id" placeholder="ID Del Medico" required>';
    echo '<input type="text" name="nombre" placeholder="Nuevo Nombre">';
    echo '<input type="text" name="especialidad" placeholder="Nueva Especialidad">';
    echo '<button type="submit">Actualizar Medico</button>';
    echo '</form>';

    case 'buscar';

    // Logica para buscar medico
    echo '<h3>Buscar medico</h3>';
    echo '<form action="buscarmedico.php" method="post">';
    echo '<input type="text" name="id" placeholder="ID Del Medico" required>';
    echo '<button type="submit">Buscar Medico</button>';
    echo '</form>';

    case 'eliminar';

    // Logica para eliminar medico
    echo '<h3>Eliminar medico</h3>';
    echo '<form action="eliminarmedico.php" method="post">';
    echo '<input type="text" name="id" placeholder="ID Del Medico" required>';
    echo '<button type="submit">Eliminar Medico</button>';
    echo '</form>';

    case 'informe';
    include 'informemedico.php';
    break;

    default:
        echo "<p>Selecciona una opciòn Valida</p>";
        break;
?>