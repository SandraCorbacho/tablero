<?php

//render vista 

require APP .'/app/src/render.php';
//si esta definida la session
if(isset($_SESSION['name'])){
    header('Location:/?url=dashboard');
}else{
    $uname = $_SESSION['uname'] ?? '';
    echo render('home', ['title' => 'home'. $uname]);
}


?>
