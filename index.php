<?php
//activacion de errores
ini_set('display_errors', 'On');
include 'start.php';

//config entorno
session_start();
define('APP',__DIR__);
require APP . '/app/src/route.php';
//enrutamineto
$controller = getRoute();
//redirigir a ruta capturada;
require APP.'/app/controllers/' . $controller . '.php';