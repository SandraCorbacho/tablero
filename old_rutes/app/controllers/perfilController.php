<?php
include APP .'app/src/render.php';
require '../../db.php';
require '../src/conexion.php';
include '../../config.php';
include '../src/render.php';
include '../src/redirect.php';
session_start();
$db = connectMysql($dsn,$dbuser,$dbpass);
//si esta definida la session
$datos=[];
existUser($db,$_SESSION['email'], $datos);
echo render('perfil', ['datos' => $datos]);