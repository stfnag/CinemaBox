<?php


/**
 * Controlador de accion correspondiente a los pagos. usando los modelos de base de datos para los respectivos casos de el metodo POST. 
 * Importacion de la conexion a la base de datos, desde el archivo config y los modelos.
 *
 */

include '../config/databaseconnection.php';
include '../model/paymentModel.php';
include '../model/reservationModel.php';
include '../model/UserModel.php';

session_start();

$conn = connection();

$paymentGateway = new PaymentModel($conn);

$reservationHandler = new ReservationModel($conn);

$user = new UserModel($conn);

if ($user->isLoggedin()) {

    if (isset($_POST)) {

        $data = file_get_contents('php://input');

        $paymentData = json_decode($data, true);

        $amount = $paymentData['amount'];
        $reservation_id = $paymentData['reservation_id'];
        $order_id = $paymentData['order_id'];

        $result = $paymentGateway->insert($amount, $reservation_id, $order_id);
        
        
        if ($result){
            $reservationHandler->updateStatusById($reservation_id, true);
        }

        $response = array(
            'orderID' => $order_id,
            'isStored' => $result
        );

        echo json_encode($response);

    }

} else {
    
    echo 'user not loggedin';

}