<?php
include APP .'/app/src/render.php';
include APP .'/config.php';

$db = connectMysql($dsn,$dbuser,$dbpass);
$data = selectWithoutJoin($db, 'tasks', 'task_items','*',8);

echo render('task',  ['title' =>'Tablero', 'data' => $data]);