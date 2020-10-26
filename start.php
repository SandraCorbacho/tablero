<?php
include 'config.php';
require 'app/src/connect.php';
$db = connectMysql($dsn,$dbuser,$dbpass);
$sql = file_get_contents('tablon.sql');
try{
    $db->exec($sql);
}
catch(PDOException $e){
    die($e->getMessage());
}
?>