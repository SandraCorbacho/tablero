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
    <link rel="stylesheet" href="files/css/style.css">
    <title>Tablero</title>
</head>
<body>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>

<div class="container">
	<div class="row login_box">
	    <div class="col-md-12 col-xs-12" align="center">
            <div class="line"><h3>Tu Tablero de Tareas</h3></div>
            <div class="outter"><img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="image-circle"/></div>   
            <h1>Hi Guest</h1>
            <span>INDIAN</span>
	    </div>
        <div class="col-md-6 col-xs-6 follow line" align="center">
            <h3>
               <span id='login'>Login</span>
            </h3>
        </div>
        <div id='register' class="col-md-6 col-xs-6 follow line" align="center">
            <h3 >
                 <span >Registro</span>
            </h3>
        </div>
        
            <div class="col-md-12 col-xs-12 login_control">
                
                <form id='form' action="controllers/userController.php" method='POST'>
             
                    <div class="control">
                        <div class="label">Email Address</div>
                        <input type="hidden" name='type' id='type' value='login'>
                        <input type="text" id='correo' class="form-control" name='correo' placeholder="admin@gmail.com" required/>
                    </div>
                    
                    <div class="control">
                        <div class="label">Password</div>
                        <input type="password" id='pass' name='pass' class="form-control" placeholder="Contraseña" required/>
                    </div>    
                    <div class="control registerData">
                        <div class="label">Password2</div>
                        <input type="password" id='pass2' name='pass2' class="form-control" placeholder="Repetir Contraseña" required/>
                    </div> 
                    <div class="control registerData">
                        <div class="label">Nombre</div>
                        <input type="text" id='name' name='name' class="form-control" placeholder="Nombre" required/>
                    </div>    
                    <div class="control registerData">
                        <div class="label">Apellidos</div>
                        <input type="text" id='surname' name='surname' class="form-control" placeholder="Apellidos" required/>
                    </div>  
                    <div class="control text-center ">
                    <input class='btn btn-secondary' id='button_send' type="text" value="Enviar" class='w-50'> 
                    </div>
                   
                </form>         
            </div>  
        
    </div>
</div>
<script>
    $( document ).ready(function() {
        $('#register').click(function(){
            $('.registerData').show();
            $('#type').val('register');
        })
        $('#login').click(function(){
            $(".registerData input").prop('required',false);
            $('.registerData').hide();

            $('#type').val('login');
            
        })
        $('#button_send').click(function(){
            
            $type=$('#type').val();
            
            if($type=='register'){
                if($('#pass').val() == $('#pass2').val() && $('#pass').val()!= '' && $('#pass2') != ''){
                    if($('#name').val() != '' && $('#surname').val() != '' && $('#correo').val()){
                        $('#form').submit();
                    }else{
                      
                        alert('Debe completar todos los datos');
                    }
                }else{
                    alert('Las contraseñas deben coincidir')
                }
            }else{
                if($('#correo').val() != '' && $('#pass').val() != ''){
                    $('#form').submit();
                }else{
                    alert('completa todos los datos')
                }
            }
        })
    });
  
    
</script>
</body>
</html>