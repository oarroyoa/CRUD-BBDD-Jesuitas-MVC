<?php
include('../../interfaz.php');
imprimirCabecera("Modificar Lugar");

require_once('../../app/controllers/LugarController.php'); // Incluimos el controlador

$controller = new LugarController();

if ($_GET['ip']) {
    $ip = $_GET['ip'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $lugar = $_POST['lugar'];
        $descripcion = $_POST['descripcion'];

        $mensaje = $controller->modificarLugar($ip, $lugar, $descripcion);
        echo "<p>" . $mensaje . "</p>";
    }

    $lugar = $controller->consultarLugar($ip);

    if (!empty($lugar)) {
        echo "<form method='post' action='listar_modificar.php?ip=$ip'>";
        echo "<label for='ip'>IP:</label>";
        echo "<input type='text' name='ip' value='" . $lugar['ip'] . "' readonly>";
        echo "<label for='lugar'>Lugar:</label>";
        echo "<input type='text' name='lugar' value='" . $lugar['lugar'] . "'>";
        echo "<label for='descripcion'>Descripción:</label>";
        echo "<input type='text' name='descripcion' value='" . $lugar['descripcion'] . "'>";
        echo "<input type='submit' value='Modificar lugar seleccionado'>";
        echo "</form>";
    } else {
        echo "<p>No existe un lugar con la IP proporcionada.</p>";
    }
}

imprimirPie("Modificar Lugar");
?>
