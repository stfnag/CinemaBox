<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel='shortcut icon' href='img/box.png' />
        
    <title>Inicio de sesion</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="
        margin-left: 20px;
        margin-right: 20px;
    ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <img src='img/box.png' class="bi me-2" width="50" height="50" alt='logo'><b>CinemaBox</b>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Proximos estrenos</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contactos</a>
        </li>
      </ul>
      <div class="col-md-3 text-end">
            <a href="signup.php"><button type="button" class="btn btn-primary">Registrate</button></a>
          </div>
    </div>
  </div>
</nav>
<div id="rep" style="
            margin-left: 20px;
            margin-right: 20px;
        ">

    </div>

<hr>
    <div class="content-space"></div>
    <div class="content-space"></div>

<div class="d-flex justify-content-center">
        <div class="row row-cols-1 row-cols-md-4 g-4" style="
            margin-left: 20px;
            margin-right: 20px;
        ">

        <div style="
            width: 360px;
            height: 400px;
            padding: 20px;
            border-radius: 12px;
            background: rgb(248 249 250);
            margin-left: 110px;
        ">
            
            <h2 class="text-center">Ingresa a nuestros servicios</h2>
            <form id="form-signIn" action="../controllers/loginControllers.php" method="POST" enctype="multipart/data-form" class="needs-validation">

                <div class="form-group was-validated">
                <label class="form-label" for="text"></label>
                    <input id="email" class="form-control" placeholder="Email" type="text" name="email" required>
                    <div class="invalid-feedback">El email es requerida</div>
                </div>
            
                <div class="form-group was-validated">
                    <label class="form-label" for="password"></label>
                    <input id="password" class="form-control" placeholder="Clave" type="password" name="password" required>
                    <div class="invalid-feedback">La clave es requerida</div>
                </div>
                <br>
                <input type="submit" class="btn btn-primary w-100" value="Ingresar" name="signIn">
              

            </form>
        
        </div>
  
        

        <img style="width: 500px; height: 400px;" src="https://static.vecteezy.com/system/resources/previews/005/992/382/original/night-cinema-movie-premiere-screen-with-friends-sitting-together-on-red-chairs-watching-a-film-in-flat-design-background-illustration-vector.jpg" /></img>
            


    
        </div>

</div>


        <div class="content-space"></div>
        <div class="content-space"></div>
        <div class="content-space"></div>




    <footer>
    <div class="footer-header"style="
        height: 100px;
    ">
                <div class='Icon'>
                    <a href='index.php' class="text-decoration-none text-white"><img src='img/white-box.png' alt='logo'>CinemaBox</a>   
                </div>
            </div>
  <div class="text-white bg-dark">
    <div class="row"style="
        margin-left: 20px;
        margin-right: 20px;
    ">
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div>
          <h3 style="
            color: white;
          ">CinemaBox</h3>
          <p align="justify">Mas entretenimiento, Mejor servicio. Es una web multiplataforma donde los usuarios prodra consultar y hacer reservaciones de sus peliculas favoritas y en estreno.</p>
        </div>
      </div>
      <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6">
        <div class="">
          <h4>Asociacion</h4>
          <ul class="list-unstyled">
            <li>
              <a href="https://portalunimar.unimar.edu.ve/" class="text-decoration-none text-white" target="_blank">Unimar</a>
            </li>
            <li>
              <a href="#" class="text-decoration-none text-white">CinemaBox</a>
            </li>
            <li>
              <a href="https://www.google.com/maps/place/Universidad+De+Margarita/@10.9786735,-63.8847624,17z/data=!3m1!4b1!4m6!3m5!1s0x8c318c3b89e345cd:0xbaf23c34b11f9d7!8m2!3d10.9786683!4d-63.8798915!16s%2Fg%2F11gmzlk_gj?entry=ttu" class="text-decoration-none text-white" target="_blank">Ubicacion</a>
            </li>

          </ul>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6">
        <div>
          <h4>Desarrollo</h4>
          <ul class="list-unstyled">
            <li>
              <a href="#" class="text-decoration-none text-white">Estefania Garcia</a>
            </li>
            <li>
              <a href="#" class="text-decoration-none text-white">Luis Azocar</a>
            </li>
            <li>
              <a href="#" class="text-decoration-none text-white">Santiago Triviño</a>
            </li>

          </ul>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6">
      <div>
          <h4>Siguenos</h4>
          <ul class="list-unstyled">
            <li>
        </div>
        <style>
 
     .enlace-ampliado {
     font-size: 40px; 
     text-decoration: none;
    }
    </style>
            <a href="https://www.linkedin.com/login" target="_blank" class="text-white enlace-ampliado"><span class="ld"><i class="fa-brands fa-linkedin"></i></span></a>
            <a href="https://www.facebook.com/" target="_blank" class="text-white enlace-ampliado"><span class="fk"><i class="fa-brands fa-facebook"></i></span></a>
            <a href="https://www.instagram.com/" target="_blank" class="text-white enlace-ampliado"><span class="im"><i class="fa-brands fa-instagram"></i></span></a>
        <div>
          
          <ul class="list-unstyled">
            <li>
                
            </li>
            <li>
              <p>Whatsapp: +58 412 789 78 78</p>
            </li>
            <li>
              

            </li>
          </ul>
        </div>
      </div>
    </div>
    <hr>
    <div class="d-flex justify-content-center">

      <div class="copyright">
        <p>Copyright © 2023 CinemaBox®. Todos los derechos reservado | Politica de privacidad   Terminos y condiciones</p>
      </div>
    </div>
  </div>
</footer>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="javascript/loginController.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/0c2ccaf044.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html> 