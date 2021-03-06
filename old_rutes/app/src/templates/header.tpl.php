<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../public/css/style.css">
    
    <title>Tablero</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
</head>
<body>
<header>

<div class="preview-bar bg-white fixed-top py-2 border-bottom-primary">
        <div class="container-fluid h-100">
            <div class="row align-items-center justify-content-between h-100">
                <div class="col-auto col-lg">
                    <i class="fab fa-github text-github small"></i>

                    
                    <a class="small" href="https://github.com/StartBootstrap/startbootstrap-small-business">View on GitHub</a>
                    

                </div>
                <div class="col col-auto d-none d-xl-block">
                    <ul class="nav responsive-toggler justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="desktopToggle" data-toggle="tab" href="#" role="tab" aria-selected="true">
                                <i class="fal fa-desktop"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="mobileToggle" data-toggle="tab" href="#" role="tab" aria-selected="false">
                                <i class="fal fa-mobile"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col text-right d-flex justify-content-end">

                    

                    
                    <form action="../../app/controllers/perfilController.php" method='POST'  class="mr-2" ><input class='btn btn-primary btn-sm mr-2"' type='submit' value='Perfil'></form>
                    

                    
                    <form action="../../app/controllers/logoutController.php" method='POST' class="btn btn-link btn-sm d-none d-md-inline-block"><i class="fal fa-times mr-1"></i><input type='submit' value='Cerrar Sessión'></form>
                    
                </div>
            </div>
        </div>
    </div>
</header>