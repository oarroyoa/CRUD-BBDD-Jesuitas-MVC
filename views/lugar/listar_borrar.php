<?php
include('../../interfaz.php');
imprimirCabecera("Eliminar Lugar");

require_once('../../app/controllers/LugarController.php'); // Incluimos el controlador

$controller = new LugarController();

if ($_GET['ip']) {
    $ip = $_GET['ip'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmar'])) {
        // El usuario ha confirmado la eliminación
        $mensaje = $controller->eliminarLugar($ip);
        echo "<p>" . $mensaje . "</p>";
    } else {
        // Mostrar el mensaje de confirmación
        echo "<p>¿Desea borrar este lugar?</p>";
        echo "<form method='post' action='listar_borrar.php?ip=$ip'>
            <input type='submit' name='confirmar' value='Si'>
            <input type='submit' name='cancelar' value='No'>
        </form>";
    }
}

imprimirPie("Eliminar Lugar");
?>
