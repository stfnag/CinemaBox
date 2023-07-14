<?php

session_start();
if (isset($_SESSION['user_id']) && $_SESSION['name']) {



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
            
        <title>Mis reservaciones</title>
    </head>

    <body>
        <!-- cuerpo de la pagina -->
        <?php
            $now = time(); 

            if ($now > $_SESSION['expire']) {
                $message= 'sesion expirada';
                header("location:../public/login.php?message=$message");
                return;
            }
        ?>

        <header>
                    <div class='boxIcon'>
                    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="
                margin-left: 20px;
                margin-right: 20px;
            ">
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
                <a class="nav-link active" aria-current="page" href="#">Contracto</a>
                </li>
            </ul>
            
            <div class="dropdown">
            <img src='img/user_default_img2.png' class="bi me-2" width="50" height="50" alt='avatar'>
  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    <?php echo $_SESSION['name'] ?>
  </a>
    
  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="userProfile-section.php">Mi perfil</a></li>
    <li><a class="dropdown-item" href="#">Reportar</a></li>
    <li><a class="dropdown-item" href="myreservation-section.php">Mis reservaciones</a></li>
    <li><a class="dropdown-item" href="../controllers/logoutController.php?message=Cierre de sesion exitoso">Cerrar sesion</a></li>
  </ul>
</div>
            
            
            </div>
            
        </div>
        </nav>
        </header>
        <hr>


       

    <section style="
        margin-left: 40px;
        margin-right: 40px;
    ">  
        <center>
        <h2 class="bg-danger text-white">Mis reservaciones</h2>
        
        </center>
        

    </section>

<section>

    <div class="container">
    
        <div class="row">
        
            <div class="col">
                <div class="table-responsive">
                <table id="cont-table" class="table table-hover">
                    <thead>
                        <tr>
                            <th>Pelicula</th>
                            <th>Fecha de funcion</th>
                            <th>Hora funcion</th>
                            <th>Salon</th>
                            <th>N tickets</th>
                            <th>Asientos</th>
                            <th>Cantidad total a pagar $</th>
                            <th>Opciones</th>
                        </tr>
                        
                    </thead>
                    <tbody id="tablebody">
                    <tbody>
                </table>
                </div>
            </div>
        
        </div>

    </div>

</section>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <img src='img/box.png' class="bi me-2" width="50" height="50" alt='logo'><b>CinemaBox</b>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div id="mod-cont" class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


        <div class="content-space"></div>
        <div class="content-space"></div>
        <div class="content-space"></div>

           
            <footer class="fixed-bottom">
    <div class="footer-header"style="
        height: 100px;
    ">
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

        
 
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        <script src="javascript/myreservationController.js"></script>


        <script src="https://kit.fontawesome.com/0c2ccaf044.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>


    </html>

<?php } else {
    header('location: index.php');
}


?>