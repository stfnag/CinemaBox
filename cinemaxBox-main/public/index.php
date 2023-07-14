<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel='shortcut icon' href='img/box.png' />
        
    <title>CinemaBox</title>
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
          <a class="nav-link active" aria-current="page" href="index.php" Style="text-decoration-none text-white">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Proximos estrenos</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contactos</a>
        </li>
      </ul>
      <div class="col-ms-3 text-end">
            <a href="login.php"><button type="button" class="btn btn-outline-primary me-2">Iniciar sesion</button></a>
            <a href="signup.php"><button type="button" class="btn btn-primary">Registrate</button></a>
          </div>
    </div>
  </div>
</nav>

<hr>

    <div class="card mb-3 text-white">
        <img src="img/denise-jans-OaVJQZ-nFD0-unsplash.jpg" class="card-img-top-bottom" alt="..." height="500px">
        <div class="card-img-overlay d-flex justify-content-center flex-column text-center">
            <h2 class="card-title"><b>Mas entretenimiento, Mejor servicio. CinemaBox</b></h2>
        </div>
    </div>



<hr>


<section>
<h2 class="text-center bg-danger text-white" style="
        margin-left: 20px;
        margin-right: 20px;
    ">Peliculas en Cartelera</h2>

<center> 
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



<section>
        <div class="content-space"></div>
        <h2 class="text-center bg-danger text-white"style="
        margin-left: 20px;
        margin-right: 20px;
    ">Proximos estrenos</h2>
        <div class="content-space"></div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="
        carousel-control-opacity: .5;
        margin-left: 100px;
        margin-right: 100px;
    ">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://i0.wp.com/batman-news.com/wp-content/uploads/2023/02/The-Flash-2023-Character-Posters-The-Flash-Featured-01.jpg?fit=2560%2C1440&quality=80&strip=info&ssl=1" class="d-block opacity-1000" alt="..."style="width: 80rem; height: 650px;">
            <div class="carousel-caption d-none d-md-block">
                <h5><b>The Flash</b></h5>
                <p>Después de ayudar a Batman y a la Mujer Maravilla a detener un robo a un banco que salió mal, Flash vuelve a visitar la casa de su infancia</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="https://assets-in.bmscdn.com/discovery-catalog/events/et00358678-xvjuyrppyz-landscape.jpg" class="d-block" alt="..." style="width: 80rem; height: 650px;">
            <div class="carousel-caption d-none d-md-block">
                <h5><b>Ruby Gillman, Teenage Kraken</b></h5>
                <p>Las aventuras de una tímida joven de 16 años llamada Ruby Gillman que se entera de que es la siguiente de una legendaria ascendencia de krakens marinos reales</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="https://www.loslunesseriefilos.com/wp-content/uploads/2023/05/oppenheimer-pelicula-nolan.jpg" class="d-block" alt="..."style="width: 80rem; height: 650px;">
            <div class="carousel-caption d-none d-md-block">
                <h5><b>Oppenheimer</b></h5>
                <p>El físico Robert Oppenheimer trabaja con un equipo de científicos durante el Proyecto Manhattan, que condujo al desarrollo de la bomba atómica</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>


</section>

<div class="content-space"></div>
<hr>
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
              <a href="index.php" class="text-decoration-none text-white">CinemaBox</a>
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

    <a href="https://ve.linkedin.com/school/universidad-de-margarita/" target="_blank" class="text-white enlace-ampliado">
    <span class="ld"><i class="fa-brands fa-linkedin"></i></span>
    </a>
    <a href="https://www.facebook.com/p/UnivdeMargarita-100065040729246/" target="_blank" class="text-white enlace-ampliado">
     <span class="ld"><i class="fa-brands fa-facebook "></i></span>
    </a>
    <a href="https://www.instagram.com/universidademargarita/?hl=es" target="_blank" class="text-white enlace-ampliado">
  <span class="ld"><i class="fa-brands fa-instagram"></i></span>
    </a>
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



    <script src="https://kit.fontawesome.com/0c2ccaf044.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>