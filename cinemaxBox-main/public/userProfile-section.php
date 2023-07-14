<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css" rel="stylesheet"/>
   
    <link rel='shortcut icon' href='img/box.png' />
        
    <title>Mi perfil</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- cuerpo de la pagina -->
    <?php
    $now = time(); 

    if ($now > $_SESSION['expire']) {
        $message= 'sesion expirada';
        header("location:../public/login.php?message=$message");
        exit;
    }
    ?>

    <header>
        <div class='boxIcon'>
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-left: 20px; margin-right: 20px;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="account.php">
                        <img src='img/box.png' class="bi me-2" width="50" height="50" alt='logo'><b>CinemaBox</b>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="account.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Proximos estrenos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Contacto</a>
                            </li>
                        </ul>
                        
                        <div class="d-flex">
    <div id="greeting" class="mx-2" style=" margin-top: 7px;"></div>
    <div class="mx-2">
        <form method="POST" action="../controllers/logoutController.php">
            <button type="submit" class="btn btn-primary">Cerrar sesión</button>
        </form>
    </div>
</div>

                </div>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg mt-5">
                <div class='card text-center'>
            <div class='card-header'><h3>Mi perfil</h3></div>
            <div class='card-body'>
            <div class="content-space"></div>
                <button type="button" class="btn btn-light mt-1">
                    Cant. reservaciones <span id="countRev" class="badge bg-danger"></span>
                </button>
                <button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Actualizar mi info
                </button>
                
            </div>
        </div>
            </div>
            <div class="col-lg mt-5">
                <div class='card'>
                    <div class='card-header'><h3>Info</h3></div>
                    <div class='card-body'>
                        <form method='POST' action=''>
                            <div class='row'>
                                <div class='col-md-6 mt-1'>
                                    <label>Nombre completo</label>
                                    <input id='fullname' type='text' name='full_name' class='form-control' value='' readonly>
                                </div>
                                <div class='col-md-6 mt-1'>
                                    <label>Email</label>
                                    <input id='email' type='email' name='email' class='form-control' value='' readonly>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    

            <div class="content-space"></div>

        
    <footer class='mt-auto'>
        <div class="footer-header"style=" height: 100px;">
            <div class='Icon'>
                <a href='account.php' class="text-decoration-none text-white"><img src='img/white-box.png' alt='logo'>CinemaBox</a>   
            </div>
        </div>
        <div class="text-white bg-dark">
  
        <div class="d-flex justify-content-center">

      <div class="copyright">
        <p>Copyright © 2023 CinemaBox®. Todos los derechos reservado | Politica de privacidad   Terminos y condiciones</p>
      </div>
    </div>
  </div>
</footer>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizacion de datos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="alert alert-info" role="alert"> Por temas de seguridad, su email no podra ser modificado. </div>
            <form>
            <div class="row">
    <div class="col">
        <label for="inputNewname">Nuevo nombre</label>
      <input type="text" class="form-control" id="inputNewname" placeholder="Nuevo nombre">
    </div>
    <div class="col">
        <label for="inputNewlastname">Nuevo apellido</label>
      <input type="text" class="form-control" id="inputNewlastname" placeholder="Nuebo apellido"> <br>
    </div>
  </div>
  <div class="form-row">
    
  <div class="form-group">
    <label for="inputNewpassword">Nueva contraseña</label>
    <input type="password" class="form-control" id="inputNewpassword" placeholder="Nuevo contraseña">
  </div> <br>
  <div class="form-group">
    <label for="inputconfirm">Confirmacion (contraseña actual)</label>
    <input type="password" class="form-control" id="inputconfirm" placeholder="ingrese su contraseña para confirmar">
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="updateData()">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src='javascript/userProfileController.js'></script>

</body>
</html>
