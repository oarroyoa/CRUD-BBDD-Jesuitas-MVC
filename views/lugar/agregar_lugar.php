<?php
include('../../interfaz.php');
imprimirCabecera("Agregar Lugar");

require_once('../../app/controllers/LugarController.php'); // Incluimos el controlador

$controller = new LugarController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ip']) && isset($_POST['lugar']) && isset($_POST['descripcion'])) {
    $ip = $_POST["ip"];
    $lugar = $_POST["lugar"];
    $descripcion = $_POST["descripcion"];

    $mensaje = $controller->agregarLugar($ip, $lugar, $descripcion);

    echo "<p>$mensaje</p>";
}

echo "<form method='post' action='agregar_lugar.php'>
    <label for='ip'>IP:</label>
    <input type='text' id='ip' name='ip' required><br>
    <label for='lugar'>Lugar:</label>
    <input type='text' id='lugar' name='lugar' required><br>
    <label for='descripcion'>Descripción:</label>
    <input type='text' id='descripcion' name='descripcion' required><br>
    <input type='submit' value='Agregar Lugar'>
</form>";

imprimirPie("Agregar Lugar");
?>
