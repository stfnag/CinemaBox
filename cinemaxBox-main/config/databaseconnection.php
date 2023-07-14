<?php


/**
 *
 * funcion para conexion a la base de datos
 *
 * @return Mysqli object
 * 
 */

function connection()
{
    $host = 'sql111.epizy.com';
    $user = 'epiz_34263653';
    $password = 'CIuKiV7XbTI';
    $database = 'epiz_34263653_cinemabox';
    $conn = mysqli_connect($host, $user, $password, $database);

    if ($conn->connect_error) {

        die('database connection failed');

    } else {

        return $conn;
        
    }
}