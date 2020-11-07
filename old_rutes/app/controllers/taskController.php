<?php
include APP .'/app/src/render.php';
include APP .'/config.php';
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $db = connectMysql($dsn,$dbuser,$dbpass);
    $data = selectWithoutJoin($db, 'tasks', 'task_items','*',$email);
    
    echo render('task',  ['title' =>'Tablero', 'data' => $data]);
}

else{
    header('Location:tablero/?url=home'); 
}