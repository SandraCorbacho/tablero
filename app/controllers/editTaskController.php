<?php

include APP .'app/src/render.php';
require '../../db.php';
require '../src/conexion.php';
include '../../config.php';
include '../src/render.php';
include '../src/redirect.php';
session_start();
$db = connectMysql($dsn,$dbuser,$dbpass);
$idItem = filter_input(INPUT_POST,'idItem');
$itemName = filter_input(INPUT_POST,'editItemName');
$description = filter_input(INPUT_POST,'editDescription');
$start_date = filter_input(INPUT_POST,'editStart_date');
$finish_date = filter_input(INPUT_POST,'editFinish_date');

$data= [
    'id'          => $idItem,
    'email'       => $_SESSION['email'],
    'itemName'    => $itemName,
    'description' => $description,
    'start_date'  => $start_date,
    'finish_date' => $finish_date
];

editTask($db,$data);
header('Location:/?url=dashboard');