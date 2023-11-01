<?php

require_once('../../app/models/LugarModel.php');

class LugarController
{
    private $model;

    public function __construct()
    {
        $this->model = new LugarModel();
    }

    public function agregarLugar($ip, $lugar, $descripcion)
    {
        return $this->model->agregarLugar($ip, $lugar, $descripcion);
    }

    public function modificarLugar($ip, $lugar, $descripcion)
    {
        return $this->model->modificarLugar($ip, $lugar, $descripcion);
    }

    public function eliminarLugar($ip)
    {
        return $this->model->eliminarLugar($ip);
    }

    public function obtenerLugares()
    {
        return $this->model->obtenerLugares();
    }

    public function consultarLugar($ip)
    {
        return $this->model->consultarLugar($ip);
    }
}
?>
