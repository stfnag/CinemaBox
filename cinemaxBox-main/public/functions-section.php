<?php
    require_once('../config/databaseconnection.php');
session_start();
if (isset($_SESSION['user_id']) && $_SESSION['name']) {

            $conn = connection();
            $param = $_GET['film_id'];
            $query="SELECT * from film where film.film_id = $param";
            $result = $conn->query($query);
            $data = $result->fetch_assoc();

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

    <title>Funciones disponibles</title>
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
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['name'] ?>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="userProfile-section.php">Mi perfil</a></li>
                                <li><a class="dropdown-item" href="#">Reportar</a></li>
                                <li><a class="dropdown-item" href="myreservation-section.php">Mis reservaciones</a></li>
                                <li><a class="dropdown-item"
                                        href="../controllers/logoutController.php?message=Cierre de sesion exitoso">Cerrar
                                        sesion</a></li>
                            </ul>
                        </div>


                    </div>

                </div>
            </nav>
    </header>
    <hr>
<style>


    .container2 {
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    }
    .container h2 {
    font-size:25px;
    color:#888;
    text-align:center;
    }
    .container .list {
    margin-top:40px;
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    gap:20px;
    max-width:650px;
    }
    .form-element {
    position:relative;
    width:80px;
    height:80px;
    }
    .form-element input {
    display:none;
    }
    .form-element label {
    width:100%;
    display:flex;
    flex-direction:column;
    justify-content:center;
    height:100%;
    cursor:pointer;
    border:2px solid #ddd;
    background:#fff;
    text-align:center;
    transition:all 200ms ease-in-out;
    border-radius:5px;
    }
    .form-element .icon {
    margin-top:10px;
    font-size:30px;
    color:#555;
    transition:all 200ms ease-in-out;
    }
    .form-element .title {
    font-size:15px;
    color:#555;
    padding:5px 0px;
    transition:all 200ms ease-in-out;
    }
    .form-element label:before {
    content:"✓";
    position:absolute;
    width:18px;
    height:18px;
    top:8px;
    left:8px;
    background:#198754;
    color:#fff;
    text-align:center;
    line-height:18px;
    font-size:14px;
    font-weight:600;
    border-radius:50%;
    opacity:0;
    transform:scale(0.5);
    transition:all 200ms ease-in-out;
    }
    .form-element input:checked + label:before {
    opacity:1;
    transform:scale(1);
    }
    .form-element input:checked + label .icon {
    color:#198754;
    }
    .form-element input:checked + label .title {
    color:#198754;
    }
    .form-element input:checked + label {
    border:2px solid #198754;
    }



    .form-element input:disabled:checked + label:before {
        background:#FF0000;
    opacity:1;
    transform:scale(1);
    }
    .form-element input:disabled:checked + label .icon {
    color:#FF0000;
    }
    .form-element input:disabled:checked + label .title {
    color:#FF0000;
    }
    .form-element input:disabled:checked + label {
    border:2px solid #FF0000;
    }


    .form-element input:disabled + label:before {
        background:#FF0000;
    opacity:1;
    transform:scale(1);
    }
    .form-element input:disabled + label .icon {
    color:#FF0000;
    }
    .form-element input:disabled + label .title {
    color:#FF0000;
    }
    .form-element input:disabled + label {
    border:2px solid #FF0000;
    }
                    
</style>

    <div class="content-space"></div>

    <section style="
        margin-left: 40px;
        margin-right: 40px;
    ">  
        <center>
        <h2 class="bg-danger text-white">Funciones disponibles</h2>
        <div class="content-space"></div>
        </center>
        

    </section>

   <div class="container">
   
        <div class="d-flex flex-column">

            <div class="p-2">
            
                        <div class="card mb-3" style="max-width: 650px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <?php
        $picture= $data['img_url'];
        echo "<img id='filmPoster' src='$picture' class='img-fluid rounded-start' alt='...' style='width: 18rem; height: 330px;'>";
    
    ?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php  echo $_GET['film']  ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $data['description']?>
                        </p>
                        <p class="card-text"><small class="text-muted">Por favor, indique el salon, fecha y hora de la
                                funcion</small></p>
                        <form action="reservation-section.php" method="POST" enctype="multipart/data-form"
                            class="needs-validation">

                            <select id="cinema_show" class="form-select" aria-label="Default select example"
                                name="chosen-function">
                                <?php
                        $show_query="SELECT * FROM `show` INNER JOIN salon ON show.salon_id=salon.salon_id where show.film_id=$param";
                        $outcome = $conn->query($show_query);
                       
                    ?>
                                <option value="" selected>Funciones disponibles</option>
                                <?php foreach ($outcome as $data): ?>
                                <option value="<?php echo $data['show_id']?>">
                                    <?php echo $data['salon_name'] . "  -  " . $data['show_date']  . "  -  " . $data['start_at']?>
                                </option>
                                <?php endforeach?>


                            </select>
                            <br>
                            

                        </form>

                    </div>


                </div>
                
            </div>


        </div>

                


            <hr>
            </div>
            

            <div class="row">
            
                <div class="col-md-5">
                    <center>
                        <div id="badge">
                    
                    </div>
                    </center>
                    <div class="list" id="list">


                    </div>
            
                </div>

                <div class="col">

                    <div id="form-cont">
                    
                    </div>
                    
            
                </div>

            </div>
            

        </div>
   
   </div>



    <div class="content-space"></div>
    <div class="content-space"></div>
    <div class="content-space"></div>
    <hr>

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

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="javascript/functionController.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/0c2ccaf044.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

       
</body>


</html>

<?php } else {
    header('location: login.php');
}


?>