<?php
function imprimirCabecera($titulo)
{
    echo "<!DOCTYPE html>
    <!-- Óscar Arroyo Aguadero -->
    <html lang='es'>
    <head>
        <link rel='stylesheet' type='text/css' href='../../style/styles.css'>
        <title>".$titulo."</title>
    </head>
    <body>
    <h1>".$titulo."</h1>";
}

function imprimirPie($titulo)
{
    if ($titulo == 'Agregar Lugar') {
        echo "<br>
        <a href='../../index.html'>Menú</a><br>
        <a href='listar_lugar.php'>Listar Lugar - Modificado y Borrado incluido</a><br>    
        </body>
    </html>";
    } elseif ($titulo == 'Listar Lugar') {
        echo "<br>
        <a href='../../index.html'>Menú</a><br>
        <a href='agregar_lugar.php'>Agregar Lugar</a><br>
    </body>
    </html>";
    } elseif ($titulo == 'Modificar Lugar') {
        echo "<br>
        <a href='../../index.html'>Menú</a><br>
        <a href='agregar_lugar.php'>Agregar Lugar</a><br>
        <a href='listar_lugar.php'>Listar Lugar - Modificado y Borrado incluido</a><br>  
    </body>
    </html>";
    } elseif ($titulo == 'Eliminar Lugar') {
        echo "<br>
        <a href='../../index.html'>Menú</a><br>
        <a href='agregar_lugar.php'>Agregar Lugar</a><br>
        <a href='listar_lugar.php'>Listar Lugar - Modificado y Borrado incluido</a><br>  
    </body>
    </html>";
    }
}
?>
