<?php
    
include APP .'app/src/render.php';
require '../../db.php';
require '../src/conexion.php';
include '../../config.php';
include '../src/render.php';
include '../src/redirect.php';

$db = connectMysql($dsn,$dbuser,$dbpass);

//si existe la cotnraseña2, es porque se esta registrando 
if(filter_input(INPUT_POST,'pass2')!= null){
   

    $data = [
        'email'     => filter_input(INPUT_POST, 'correo'),
        'name'      => filter_input(INPUT_POST, 'name'),
        'surname'   => password_hash(filter_input(INPUT_POST, 'surname'),PASSWORD_BCRYPT,['cost'=>4]),
        'pass'      => filter_input(INPUT_POST, 'pass'),
        'role'      => 2
    ];
    if(existUser($db,$data['email'])){
        
        header('Location:/?url=home');
    }
    registeruser($db,$data);

}else{
    //sino comprobaremos si existe en la base de datos
    $email = filter_input(INPUT_POST, 'correo');
    $pass = filter_input(INPUT_POST, 'pass');
    selectUser($db,$email,$pass);
    $uname = $_SESSION['uname'] ?? '';
    header('Location:/?url=dashboard');
}
//si esta definida la session

?>
