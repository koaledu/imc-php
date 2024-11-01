<?php

class new_controlador
{
    private $modelo;

    public function __construct()
    {
        // $this->modelo = new producto();
    }

    public function Inicio()
    {
        $bd = BaseDatos::Conectar();
        require_once 'view/new.php';
    }
}

if (isset($_GET['url'])) {
    $url = $_GET['url'];
    require_once "controller/$url.controlador.php";
    $controlador_class = $url . '_controlador';
    $controlador = new $controlador_class;
    $controlador->inicio();
    $accion = isset($_GET['url']) ? $_GET['url'] : 'inicio';
} else {
    require_once 'controller/inicio.controlador.php';
    $controlador = new inicio_controlador();
    call_user_func(array($controlador, 'inicio'));
}
