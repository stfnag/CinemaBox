<?php


/**
 * Controladores de con respecto las funciones registrada del cine usando el metodo GET.
 * Importacion de la conexion a la base de datos, desde el archivo config.
 *
 */

require_once '../config/databaseconnection.php';

session_start();

$conn = connection();

if (isset($_GET['show_id'])) {

    $show = $_GET['show_id'];
    $query = "SELECT * FROM `show` WHERE show.show_id=$show";
    $result = $conn->query($query);
    $outcome = $result->fetch_assoc();
    echo json_encode($outcome);

}

if (isset($_GET['show_seat_reserved'])) {

    $id_show = $_GET['show_seat_reserved'];
    $query = "SELECT seat_code FROM `seat_reserved` WHERE seat_reserved.show_id=$id_show";
    $result = $conn->query($query);

    $outcome = array();

    while ($row = $result->fetch_assoc()) {

        $outcome[] = $row['seat_code'];
    }

    echo json_encode($outcome);
}