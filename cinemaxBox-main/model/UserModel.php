<?php


/**
 * Modelado de las consultas sql sobre la tabla usuario a traves de la programacion orientada a objetos (POO); para la reutilizacion de codigo. 
 *
 * Esta clase sera llamado o requerido por los controladores (Controllers).
 *
 */

class UserModel
{

    private $conn;
    public $user_id;
    public $name;
    public $lastname;
    public $password;

    public function __construct($connection)
    {
        $this->conn = $connection;
        $this->user_id = $_SESSION['user_id'];
        $this->name = $_SESSION['name'];
        $this->lastname = $_SESSION['last_name'];
        $this->password = $_SESSION['user_password'];
    }

    /**
     * validar si el usurio ha hecho un login
     *
     * @return boolean
     */

    public function isLoggedin()
    {
        if (!empty($_SESSION['user_id'])) {

            return true;

        } else {

            return false;

        }
    }

    /**
     * Contener un usuario a travez del objeto
     *
     * @return array of Object
     */

    public function getUser($user_id)
    {

        $query = "SELECT * FROM user WHERE user.user_id=$user_id";
        $secondQuery = "SELECT * FROM reservation WHERE reservation.user_id=$user_id";
        $search = $this->conn->query($query);
        $count = $this->conn->query($secondQuery);

        $set = array();
        while ($user = $search->fetch_assoc()) {
            $rows = array();
            $rows['id'] = $user['user_id'];
            $rows['first_name'] = $user['first_name'];
            $rows['last_name'] = $user['last_name'];
            $rows['email'] = $user['email'];
            $rows['rol_id'] = $user['rol_id'];
            $rows['amount_reservation'] = $count->num_rows;
            $set[] = $rows;
        }
        $conn->close();
        $output = array(
            'data' => $set
        );

        return $output;

    }

    /**
     * Contener datos del usuarios que ha inicido sesion
     *
     * @return array of Object
     */

    public function getUserLoggedIn()
    {


        $user_id = $_SESSION['user_id'];
        $secondQuery = "SELECT * FROM reservation WHERE reservation.user_id=$user_id";

        $count = $this->conn->query($secondQuery);

        $obj = array(
            'user_id' => $_SESSION['user_id'],
            'name' => $_SESSION['name'],
            'last_name' => $_SESSION['last_name'],
            'email' => $_SESSION['email'],
            'rol_id' => $_SESSION['user_rol'],
            'amount_reservation' => $count->num_rows
        );

        return $obj;
    }

    /**
     * validar si la contraseña ingresada es igual a la contraseña registrada en la base de datos del usuario.
     *
     * @param string $input_password
     * @return boolean
     */

    public function ispassword($input_password)
    {

        $validation = password_verify($input_password, $_SESSION['user_password']);

        if (!$validation) 
        {
            return false;

        }else 
        {
            return true;
        }
        
    }

    /**
     * Actualizar datos del usuario. obteniendo el resultado de la operacion.
     *
     * @return boolean
     */
    public function update()
    {

        $id = $this->user_id;
        

        $query = $this->conn->prepare("UPDATE user SET first_name = ?, last_name = ?, password = ? WHERE user_id = $id");

            $query->bind_param('sss', $this->name, $this->lastname, $this->password);


            if ($query->execute()) {

                return true;

            } else {

                return false;

            }        

    }



}