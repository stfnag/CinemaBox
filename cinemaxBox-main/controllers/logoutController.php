<?php

/**
 * Controlador de cierre de session segun PHP. Usando los respectivos metodos
 *
 */

session_start();

session_destroy();

$message = $_GET['message'];

header("location:../public/login.php?message=$message");