<?php


/**
 * Controlador para el uso de la consulta sobre la tabla reservacion, perteneciente a un usuario. 
 * Importacion de la conexion a la base de datos, desde el archivo config.
 *
 */

require_once '../config/databaseconnection.php';

session_start();

$conn = connection();

$user = $_SESSION['user_id'];

$request = "SELECT * FROM reservation 
    INNER JOIN `show` ON reservation.show_id=show.show_id 
    INNER JOIN salon ON show.salon_id=salon.salon_id 
    INNER JOIN `film` ON show.film_id=film.film_id 
    where reservation.user_id=$user;";

$result = $conn->query($request);

$data = array();

while ($row = mysqli_fetch_array($result)) {

    $data[] = array(
        'reservation_id' => $row['reservation_id'],
        'title' => $row['title'],
        'salon' => $row['salon_name'],
        'show_date' => $row['show_date'],
        'start_at' => $row['start_at'],
        'amount_ticket' => $row['amount_ticket'],
        'total_amount' => $row['total_amount'],
        'seat_reserved_list' => $row['seat_reserved_list'],
        'show_id' => $row['show_id'],
        'img_url' => $row['img_url'],
        'reservation_status' => $row['reservation_status']
    );
}
$setData = json_encode($data);

echo $setData;