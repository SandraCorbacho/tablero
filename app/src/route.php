<?php

function getRoute():string{
    if(isset($_REQUEST['url'])){
        $url = $_REQUEST['url'];
    }else{
        $url = 'home';
    }
    die($url);
    switch($url){
        case 'login':
            return 'userController';
        case 'logaction'://$url =logaction
            return 'userControllerAction';
        case 'home':
            return 'welcomeController';
        case 'perfil':
            return 'perfilController';
        }       
}
?>