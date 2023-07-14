<?php


/**
 * Controlador para el registro de usuarios, validando la informacion para luego ser almacenada
 * Importacion de la conexion a la base de datos, desde el archivo config.
 *
 */

require_once '../config/databaseconnection.php';

$conn = connection();

if (isset($_POST['name'])) {

    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $user_rol = 2;
    $confirmed = $_POST["confirmed"];

    if ($password != $confirmed) {

        $message = 'Clave no confirmada';
        echo $message;
        return;

    } else {

        $search = "SELECT * FROM user WHERE user.email='$email';";
        $result = $conn->query($search);

        $user = $result->fetch_assoc();

        if (!$user["email"]) {

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO `user` (first_name, last_name, email, password, rol_id) 
                    VALUES ('$name', '$lastname', '$email', '$hashed_password', '$user_rol')";

            $conn->query($query);
            $conn->close();

            $message = 'Usuario registrado exitosamente';
            echo 'done';

        } else {

            $message = 'Lo siento, el email se encuentra registrado';
            echo $message;

        }


    }
} else {

    echo 'los datos son requeridos';
}