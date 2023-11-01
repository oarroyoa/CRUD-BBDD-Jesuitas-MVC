<?php
    $ip = $_GET['ip'];
    $proceso = $_GET['proceso'];

    if ($_GET['proceso'] == 'borrar') {
    header("location:../../views/lugar/listar_borrar.php?ip=$ip");
    }

    if ($_GET['proceso'] == 'modificar') {
    header("location:../../views/lugar/listar_modificar.php?ip=$ip");
    }