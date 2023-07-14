<?php


/**
 * Controlador de perfil de usuario. para mostrar los datos del usuario previamente autorizado.
 * Importacion de la conexion a la base de datos, desde el archivo config y el modelo de usuario.
 *
 */

include '../config/databaseconnection.php';
include '../model/UserModel.php';

session_start();


$conn = connection();

$user = new UserModel($conn);

if($user->isLoggedin()){
	
	if($_GET['action'] == 'getUser')
    {
		
		$result = $user->getUserLoggedIn();
		echo json_encode($result);
	}

    if($_POST['action'] == 'update')
    {
        $obj->action = 'update';
        

        if(empty($_POST['newname']) 
        and empty($_POST['newlastname']) 
        and empty($_POST['newpassword']) 
        and empty($_POST['confirmpassword'])){
            
            $obj->message = 'sin cambios';
            $obj->status = 200;

        } else {

            if($user->ispassword($_POST['confirmpassword'])){

                if(!empty($_POST['newname'])){

                    $user->name = $_POST['newname'];
                }

                if(!empty($_POST['newlastname'])){

                    $user->lastname = $_POST['newlastname'];
                }  

                if(!empty($_POST['newpassword'])){

                    $hashed_password = password_hash($_POST['newpassword'], PASSWORD_DEFAULT);
                    $user->password = $hashed_password;
                }  

                $result = $user->update();

                if($result){

                    $obj->message = 'actualizacion completada';
                    $obj->status = 201;        

                }else{

                    $obj->message = 'actualizacion no completada';    
                    $obj->status = 500;  
                }

            } else {

                $obj->message = 'contraseña invalida';
                $obj->status = 401;  

            }

        }

        echo json_encode($obj);
    }
    
}else{
    echo 'user not loggedin';
}