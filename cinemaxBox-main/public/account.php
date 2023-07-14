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
        <link rel='shortcut icon' href='img/box.png' />
            
        <title>Cuenta</title>
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
                <a class="nav-link active" aria-current="page" href="#">Contactos</a>
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


        

<section>
<h2 class="text-center bg-danger text-white" style="
        margin-left: 20px;
        margin-right: 20px;
    ">Peliculas en Cartelera</h2>
<div class="content-space"></div>
<center>
<div class="row row-cols-1 row-cols-xl-4 g-4" style="
        margin-left: 20px;
        margin-right: 20px;
    ">

  <div class="col">
    <div class="card" style="width: 18rem;">
      <img src="img/spiderman1.jpg" class="card-img-top" alt="..." style="width: 18rem; height: 350px;">
      <div class="card-body">
        <h6 class="card-title fw-bolder">Spider-Man: a través del Spider-Verso (140 min)/Animada</h6>
        <a class="card-link text-decoration-none text-black-50" href="https://www.youtube.com/watch?v=oBmazlyP220" target="_blank"><strong>Trailer</strong></a>
        <a class="card-link text-decoration-none text-black-50" href="https://www.sonypictures.com.mx/peliculas/spider-man-traves-del-spider-verso" target="_blank"><strong>Mas informacion</strong></a>
        <a href="functions-section.php?film=Spider-Man: a través del Spider-Verso&film_id=1" class="btn btn-primary">Comprar</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width: 18rem;">
      <img src="img/la-sirenita.jpg" class="card-img-top" alt="..." style="width: 18rem; height: 350px;">
      <div class="card-body">
        <h6 class="card-title fw-bolder">La sirenita (120 min)/Fantasia/romance</h6>
        <a class="card-link text-decoration-none text-black-50" href="https://www.youtube.com/watch?v=8LECfkm4fJA" target="_blank"><strong>Trailer</strong></a>
        <a class="card-link text-decoration-none text-black-50" href="https://www.disney.es/peliculas/la-sirenita" target="_blank"><strong>Mas informacion</strong></a>
        <a href="functions-section.php?film=La sirenita&film_id=2" class="btn btn-primary">Comprar</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width: 18.2rem;">
      <img src="img/guardianes.jpeg" class="card-img-top" alt="..." style="width: 18rem; height: 350px;">
      <div class="card-body">
        <h6 class="card-title fw-bolder">Guardianes de la Glaxia: Volumen 3 (149 min)/Accion</h6>
        <a class="card-link text-decoration-none text-black-50" href="https://www.youtube.com/watch?v=nFYA2kdHy0s" target="_blank"><strong>Trailer</strong></a>
        <a class="card-link text-decoration-none text-black-50" href="https://www.fotogramas.es/noticias-cine/a32890649/guardianes-de-la-galaxia-3-reparto-estreno-sinopsis/" target="_blank"><strong>Mas informacion</strong></a>
        <a href="functions-section.php?film=Guardianes de la Glaxia: Volumen 3&film_id=3" class="btn btn-primary">Comprar</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width: 18rem;">
      <img src="img/The_Super_Mario_Bros.webp" class="card-img-top" alt="..." style="width: 18rem; height: 350px;">
      <div class="card-body">
        <h6 class="card-title fw-bolder">Super Mario Bros (92 min)/Aventuras</h6>
        <a class="card-link text-decoration-none text-black-50" href="https://www.youtube.com/watch?v=SvJwEiy2Wok" target="_blank"><strong>Trailer</strong></a>
        <a class="card-link text-decoration-none text-black-50" href="https://www.universalpictures-latam.com/micro/super-mario-bros" target="_blank"><strong>Mas informacion</strong></a>
        <a href="functions-section.php?film=Super Mario Bros&film_id=4" class="btn btn-primary">Comprar</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width: 18rem;">
      <img src="img/EVIL1.jpg" class="card-img-top" alt="..." style="width: 18rem; height: 350px;">
      <div class="card-body">
        <h6 class="card-title fw-bolder">Evil Dead El Despertar (96 min)/Terror</h6>
        <a class="card-link text-decoration-none text-black-50" href="https://www.youtube.com/watch?v=smTK_AeAPHs" target="_blank"><strong>Trailer</strong></a>
        <a class="card-link text-decoration-none text-black-50" href="https://codigoespagueti.com/resenas/resena-evil-dead-rise-bano-de-sangre-dedicado-a-fans-de-franquicia/" target="_blank"><strong>Mas informacion</strong></a>
        <a href="functions-section.php?film=Evil Dead El Despertar&film_id=5" class="btn btn-primary">Comprar</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width: 18rem;">
      <img src="https://m.media-amazon.com/images/M/MV5BODZhNzlmOGItMWUyYS00Y2Q5LWFlNzMtM2I2NDFkM2ZkYmE1XkEyXkFqcGdeQXVyMTU5OTA4NTIz._V1_FMjpg_UX1000_.jpg" class="card-img-top" alt="..." style="width: 18rem; height: 350px;">
      <div class="card-body">
        <h6 class="card-title fw-bolder">Ant-Man and the Wasp: Quantumania (149 min)/Accion</h6>
        <a class="card-link text-decoration-none text-black-50" href="https://www.youtube.com/watch?v=ZlNFpri-Y40" target="_blank"><strong>Trailer</strong></a>
        <a class="card-link text-decoration-none text-black-50" href="https://www.disneyplus.com/es-419/movies/ant-man-i-osa-kwantomania/7OLRMMgd1vkx" target="_blank"><strong>Mas informacion</strong></a>
        <a href="functions-section.php?film=Ant-Aan and the Wasp: Quantumania&film_id=6" class="btn btn-primary">Comprar</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width: 18rem;">
      <img src="https://m.media-amazon.com/images/M/MV5BZTNiNDA4NmMtNTExNi00YmViLWJkMDAtMDAxNmRjY2I2NDVjXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg" class="card-img-top" alt="..." style="width: 18rem; height: 350px;">
      <div class="card-body">
        <h6 class="card-title fw-bolder">Transformers: el despertar de las bestias (131 min)/Accion</h6>
        <a class="card-link text-decoration-none text-black-50" href="https://www.youtube.com/watch?v=itnqEauWQZM" target="_blank"><strong>Trailer</strong></a>
        <a class="card-link text-decoration-none text-black-50" href="https://www.dallasnews.com/espanol/al-dia/espectaculos/2023/06/06/transformers-rise-of-the-beasts-estreno-pelicula-bumblebee/" target="_blank"><strong>Mas informacion</strong></a>
        <a href="functions-section.php?film=Transformers: el despertar de las bestias&film_id=7" class="btn btn-primary">Comprar</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width: 18rem;">
      <img src="https://image.tmdb.org/t/p/original/phJO3vFHTsIlxAEO6tD0OpSot0q.jpg" class="card-img-top" alt="..." style="width: 18rem; height: 369px;">
      <div class="card-body">
        <h6 class="card-title fw-bolder">Scream VI poster (123 min)/Terror</h6>
        <a class="card-link text-decoration-none text-black-50" href="https://www.youtube.com/watch?v=h74AXqw4Opc" target="_blank"><strong>Trailer</strong></a>
        <a class="card-link text-decoration-none text-black-50" href="https://www.espinof.com/fecha-de-estreno/scream-6-trailer-fecha-estreno" target="_blank"><strong>Mas informacion</strong></a>
        <a href="functions-section.php?film=Scream VI&film_id=8" class="btn btn-primary">Comprar</a>
      </div>
    </div>
  </div>
</div>

</center>
</section>

    <hr>


        <div class="content-space"></div>

        
            <footer>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/0c2ccaf044.js" crossorigin="anonymous"></script>
        
    </body>


    </html>

<?php } else {
    header('location: index.php');
}


?>