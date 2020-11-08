<?php
 
include '../src/render.php';
require '../../db.php';
require '../src/conexion.php';
include '../../config.php';
//include '../src/render.php';
 include '../src/redirect.php';
 session_start();

$db = connectMysql($dsn,$dbuser,$dbpass);

// //si existe la cotnraseña2, es porque se esta registrando 
if(filter_input(INPUT_POST,'pass2')!= null){
    
        $data = [
            'email'     => filter_input(INPUT_POST, 'correo'),
            'name'      => filter_input(INPUT_POST, 'name'),
            'surname'   => filter_input(INPUT_POST, 'surname'),
            'pass'      => password_hash(filter_input(INPUT_POST, 'pass'),PASSWORD_BCRYPT,['cost'=>4]),
            'role'      => 2
        ];
       
    if(existUser($db,$data['email'])){
        
        $_SESSION['loginMessage'] = 'Usuario ya existente en nuestra base de datos';
        header('Location:tablero/?url=home');
    }else{
        
        $_SESSION['loginMessage'] = 'Usuario registrado con éxito';
        registeruser($db,$data);
    
    }
   
}else{
  
    //sino comprobaremos si existe en la base de datos
    $email = filter_input(INPUT_POST, 'correo');
    $pass = filter_input(INPUT_POST, 'pass');
    
    if(selectUser($db,$email,$pass)){
        header('Location:tablero/?url=dashboard');
    }else{

        header('Location:tablero/?url=home');
    }
   
 }
//si esta definida la session

?>
