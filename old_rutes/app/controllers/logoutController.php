<?php

session_start();
session_destroy();
header('Location:tablero/?url=home');

