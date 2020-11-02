<?php
    
include APP .'app/src/render.php';
include '../../db.php';
require '../../start.php';
//si existe la cotnraseña2, es porque se esta registrando 
if(filter_input(INPUT_POST,'pass2')!= null){

    $data = [
        'email'     => filter_input(INPUT_POST, 'correo'),
        'name'      => filter_input(INPUT_POST, 'name'),
        'surname'   => filter_input(INPUT_POST, 'surname'),
        'pass'      => filter_input(INPUT_POST, 'pass'),
        'role'      => 2
    ];
    registeruser($db,$data);
}else{
    //sino comprobaremos si existe en la base de datos
    $email = filter_input(INPUT_POST, 'correo');
    $pass = filter_input(INPUT_POST, 'pass');
    echo $email ." ". $pass;
}
//si esta definida la session
$uname = $_SESSION['uname'] ?? '';
echo render('tasks', ['title' => 'Tablero de '. $uname]);
?>
