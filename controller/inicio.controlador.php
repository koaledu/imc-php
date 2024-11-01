<?php
require_once 'model/pais.model.php';

class inicio_controlador
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Pais();
    }

    public function Inicio()
    {
        $bd = BaseDatos::Conectar();
        require_once 'view/inicio.php';
    }
}
