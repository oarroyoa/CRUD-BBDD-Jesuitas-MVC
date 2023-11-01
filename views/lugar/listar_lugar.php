<?php
include('../../interfaz.php');
imprimirCabecera("Listar Lugar");

require_once('../../app/controllers/LugarController.php'); // Incluimos el controlador

$controller = new LugarController();
$lugares = $controller->obtenerLugares();

echo "<table>
    <tr>
        <th>IP</th>
        <th>Lugar</th>
        <th>Descripción</th>
        <th>Borrar</th>
        <th>Modificar</th>
    </tr>";

foreach ($lugares as $lugar) {
    echo "<tr>";
    echo "<td>" . $lugar['ip'] . "</td>";
    echo "<td>" . $lugar['lugar'] . "</td>";
    echo "<td>" . $lugar['descripcion'] . "</td>";
    echo "<td><a href='../../app/controllers/procesos.php?ip=" . $lugar['ip'] . "&proceso=borrar'><img src='../../public/images/borrar.png'></a></td>";
    echo "<td><a href='../../app/controllers/procesos.php?ip=" . $lugar['ip'] . "&proceso=modificar'><img src='../../public/images/modificar.png'></a></td>";
    echo "</tr>";
}

echo "</table>";
imprimirPie("Listar Lugar");
?>
