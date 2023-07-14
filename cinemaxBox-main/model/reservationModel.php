<?php


/**
 * Modelado de las consultas sql sobre la tabla reservacion a traves de la programacion orientada a objetos (POO); para la reutilizacion de codigo. 
 *
 * Esta clase sera llamado o requerido por los controladores (Controllers).
 *
 */

class ReservationModel
{

    private $conn;

    public function __construct($connection)
    {
        $this->conn = $connection;
    }

    /**
     * Actualizar la informacion de la reservacion segun el valor ingresado. esta accion de debe ejecutar cuando se culmine un pago.
     *
     * @param int $reservation_id
     * @param int $status
     * @return boolean
     */

    public function updateStatusById($reservation_id, $status)
    {

        $query = $this->conn->prepare("UPDATE reservation SET reservation_status = ? WHERE reservation_id = ?");
        
        $newStatus;

        if(!$status){
            $newStatus = 0;

        }else{

            $newStatus = 1;
            
        }

        $query->bind_param('ss', $newStatus, $reservation_id);

        if($query->execute()){

            return true;

        }else{

            return false;

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