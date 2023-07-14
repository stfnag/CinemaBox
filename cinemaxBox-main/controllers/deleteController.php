<?php


/**
 * Controlador para los metodos post de eliminacion de datos en la base de datos.
 *
 * Importacion de la conexion a la base de datos, desde el archivo config.
 *
 */

header("Access-Control-Allow-Origin: *");

require_once '../config/databaseconnection.php';

session_start();

$conn = connection();

if (
    isset($_SESSION['user_id'])
    && isset($_POST['delete_reservation_id'])
    && isset($_POST['show_id'])
) {

    $targetResevation = $_POST['delete_reservation_id'];
    $targetshow = $_POST['show_id'];
    $user_id = $_SESSION['user_id'];
    $firstquery = "DELETE FROM reservation where reservation.reservation_id=$targetResevation AND reservation.user_id=$user_id";
    $secondquery = "DELETE FROM seat_reserved where seat_reserved.show_id=$targetshow AND seat_reserved.user_id=$user_id";

    $conn->query($firstquery);
    $conn->query($secondquery);

    echo 'Su reservacion ha sido eliminada satifactoriamente';

} else {

    echo 'data not sent';
    
}