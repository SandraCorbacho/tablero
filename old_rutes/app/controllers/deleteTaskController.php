<?php

include APP .'app/src/render.php';
require '../../db.php';
require '../src/conexion.php';
include '../../config.php';
include '../src/render.php';
include '../src/redirect.php';

$db = connectMysql($dsn,$dbuser,$dbpass);

$idTask = filter_input(INPUT_POST,'idTask');

deleteTask($db, $idTask);
    header('Location:tablero/?url=dashboard');

