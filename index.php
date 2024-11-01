<?php
// conexion base de datos
require_once 'model/basedatos.php';

if (isset($_GET['url'])) {
    $url = $_GET['url'];
    require_once "controller/$url.controlador.php";

    $controlador_class = $url . '_controlador';
    $controlador = new $controlador_class;
    call_user_func(array($controlador, 'inicio'));
    $accion = isset($_GET['url']) ? $_GET['url'] : 'inicio';
} else {
    require_once 'controller/inicio.controlador.php';
    $controlador = new inicio_controlador();
    call_user_func(array($controlador, 'inicio'));
}
