<?php
include APP .'/app/src/render.php';
include APP .'/config.php';
$email = $_SESSION['email'];
$db = connectMysql($dsn,$dbuser,$dbpass);
$data = selectWithoutJoin($db, 'tasks', 'task_items','*',$email);

echo render('task',  ['title' =>'Tablero', 'data' => $data]);