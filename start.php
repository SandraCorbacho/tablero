<?php
include 'config.php';
require 'app/src/conexion.php';

$db = connectMysql($dsn,$dbuser,$dbpass);
$sql = file_get_contents('tablero.sql');

try{
    $db->exec($sql);
}
catch(PDOException $e){
    die($e->getMessage());
}
?>