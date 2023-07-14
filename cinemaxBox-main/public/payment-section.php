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

    <title>Proceso de pago</title>
</head>

<body>
    <!-- cuerpo de la pagina -->
    <?php
    $now = time();

    if ($now > $_SESSION['expire']) {
        $message = 'sesion expirada';
        header("location:../public/login.php?message=$message");
        return;
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="mt-5 col-lg align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                        <a href="myreservation-section.php"><button type="button" class="btn btn-light rounded-pill" style="padding-top: 0px;"><i class="fa-sharp fa-solid                              fa-arrow-left"></i></button></a>
                        </div>
                        <div class="col-3">
                            <p>Pagos online</p>
                        </div>
                        <div class="col-1">
                            <span class="badge rounded-pill bg-warning text-dark">100% seguro</span>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="mt-5 col">
                            <h3 align="center">Informacion de pago</h3>
                            <table class="table">
                                <tr>
                                    <td id="total_amount" align="center"></td>
                                </tr>
                                <tr>
                                    <td id="amount_ticket" align="center"></td>
                                </tr>
                            </table>
                            <div class="mt-3" align="center"><img class="img-responsive" id="poster_film_reservation" style="width: 300px; height: auto;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 col-lg align-items-center">
                <h3 align="center">Metodo de pago</h3>
                <div class="mt-5" id="paypal-button-container"></div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=AWilh_PQ4WoL-UJWOEOsh7Fti_nE1_tje5Hut1Pq4tCGttQTmcEqByCvdjzg_yL8eMQPJluYUgJhVZ52"></script>
    <script src="javascript/paymentController.js"></script>
    <script src="https://kit.fontawesome.com/0c2ccaf044.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

<?php
} else {
    header('location: index.php');
}
?>
