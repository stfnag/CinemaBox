<?php


/**
 * Controlador de autenticacion de usuarios, usando el metodo POST
 * Importacion de la conexion a la base de datos, desde el archivo config.
 *
 */

require_once '../config/databaseconnection.php';

session_start();

$conn = connection();

if (
    empty($_POST["email"])
    or empty($_POST["password"])
) {
    
    $message = 'Todos los campos son requeridos. Por favor, intente nuevamente';
    echo $message;
    
} else {

    $email = $_POST["email"];
    $input_password = $_POST["password"];

    $query = "SELECT * FROM user WHERE user.email='$email';";
    $result = $conn->query($query);
    $conn->close();

    $user = $result->fetch_assoc();

    if ($user["email"] == null) {

        $message = 'Usuario no registrado';
        echo $message;

    } else {

        $validation = password_verify($input_password, $user["password"]);

        if (!$validation) {

            $message = 'Email o clave incorrecta';
            echo $message;

        } else {

            $_SESSION["user_id"] = $user['user_id'];
            $_SESSION["name"] = $user['first_name'];
            $_SESSION["last_name"] = $user['last_name'];
            $_SESSION["email"] = $user['email'];
            $_SESSION["user_rol"] = $user['rol_id'];
            $_SESSION["user_password"] = $user["password"];
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
            
            echo 'done';

        }

    }

}