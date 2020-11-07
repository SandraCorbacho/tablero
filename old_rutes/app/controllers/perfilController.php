<?php
require '../src/render.php';
//si esta definida la session
echo render('perfil', ['title' => 'Todo '. $uname]);