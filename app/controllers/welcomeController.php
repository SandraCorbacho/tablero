<?php

//render vista 

require APP .'/app/src/render.php';
//si esta definida la session
$uname = $_SESSION['uname'] ?? '';
echo render('home', ['title' => 'Todo '. $uname]);

?>
