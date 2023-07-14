<?php


/**
 * Controlador para el caso de uso de hacer una reservacion, usando el metodo POST.
 * Importacion de la conexion a la base de datos, desde el archivo config.
 *
 */

header("Access-Control-Allow-Origin: *");

require_once '../config/databaseconnection.php';

session_start();

$conn = connection();

if (
    isset($_SESSION['user_id'])
    && isset($_POST['show_id'])
    && isset($_POST['amount_ticket'])
    && isset($_POST['show_cost'])
    && isset($_POST['seat_reserved_list'])
) {

    $reservation_date = date("y-m-d");
    $amount_ticket = $_POST['amount_ticket'];
    $cost = $_POST['show_cost'];
    $total_amount = ($amount_ticket * $cost);
    $seat_reserved_list = $_POST['seat_reserved_list'];
    $user_id = $_SESSION['user_id'];
    $show_id = $_POST['show_id'];

    $query = "INSERT INTO `reservation` 
    VALUES ('','$reservation_date', '$amount_ticket', '$total_amount', '$seat_reserved_list', '$user_id', '$show_id', '0');";
    $conn->query($query);
    $reservation_id = $conn->insert_id;

    $seat_list = explode(", ", $seat_reserved_list);

    foreach ($seat_list as $seat_code) {

        $seat_query = "INSERT INTO `seat_reserved` VALUES('','$seat_code', '1', '$user_id', '$show_id');";
        $conn->query($seat_query);

    }

    $data->reservation_id = $reservation_id;
    $data->total_amount = $total_amount;
    $data->show_cost = $cost;
    $data->amount_ticket = $amount_ticket;
    $data->show_id = $show_id;

    if ($conn->error) {
        $data->message = 'Reservacion no procesada. algo ha sucedido';
        

    } else {
        $data->message = 'done';
        
    }

    $json = json_encode($data);
    echo $json;

} else {

    echo 'data incomplete';

}