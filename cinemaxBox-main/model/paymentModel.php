<?php


/**
 * Modelado de las consultas sql sobre la tabla pago a traves de la programacion orientada a objetos (POO); para la reutilizacion de codigo.
 *
 * Esta clase sera llamado o requerido por los controladores (Controllers).
 *
 */


class PaymentModel
{

    private $conn;

    public function __construct($connection)
    {
        $this->conn = $connection;
    }

    /**
     * Registro de pago en la base de datos.
     *
     * @param float $amount
     * @param int $reservation_id
     * @param string $order_id
     * @return boolean
     */

    public function insert($amount, $reservation_id, $order_id)
    {

        if ($_SESSION['user_id']) {

            $payDate = date("Y-m-d");
            $this->userId = $_SESSION['user_id'];

            $query = $this->conn->prepare("
				INSERT INTO payment (payment_date, amount, user_id, reservation_id, order_id)
				VALUES(?, ?, ?, ?, ?)");

            $query->bind_param('sssss', $payDate, $amount, $this->userId, $reservation_id, $order_id);


            if ($query->execute()) {

                return true;

            } else {

                return false;

            }

        }

    }

    /**
     * Validar si la revervacion ha sido pagada.
     *
     * @param int $reservation_id
     * @return boolean
     */

    public function isReservationpaid($reservation_id)
    {

        if ($_SESSION['user_id']) {

            $query = $this->conn->prepare("
				SELECT * FROM payment WHERE payment.reservation_id = ? ");

            $query->bind_param('s', $reservation_id);

            $query->execute();
            $result = $query->get_result();

            if ($result->num_rows == 0) {

                return false;

            } else {

                return true;

            }

        }

    }

    /**
     * Cerrar conexion
     * 
     * 
     * @return void
     */

    public function closeConn()
    {
        $this->conn->close();
    }

}