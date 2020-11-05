<?php

include 'header.tpl.php';

session_start();
?>


  

<div class="container contaienr-task">
	<div class="row login_box container-banner-principal">
	    <div class="col-md-12 col-xs-12" align="center">
            <div class="line"><h3>Tu Tablero de Tareas</h3></div>
            <div class="outter"><img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="image-circle"/></div>   
            <h1>Bienvenido a tu tablero</h1>
	    </div>
        <div class="col-md-12 col-xs-12 login_control">
            
             <table style='height: auto;
position: initial;
color: black;'>
            <th>
                <td style='color:black'>Usuario</td>
            </th>
            <th>
                <td style='color:black'>Tarea</td>
            </th>
            <th>
                <td style='color:black'>fechaInicio</td>
            </th>
            <th>
                <td style='color:black'>FechaFin</td>
            </th>
            
                
                <?php foreach($data as $key => $dato){
                    print_r($dato);
                    $table='';
                    
                   
                   
                
                    $table.= "<tr>
                                <td style='color:black'>".$dato['id']."</td>";
                              
                            
                   
                    
                    
                
                    
                 }
                 $table.="</tr>";
                 echo $table;
                 ?>
             </table>        
        </div>  
    </div>
</div>


 <?php
include 'footer.tpl.php';
echo '<script src="/public/js/'.$title.'.js></script>';
?>





