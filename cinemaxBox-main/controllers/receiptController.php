<?php


/**
 * Contructor del modelo visual de la factura. usando la dependencia de una libreria. 
 * Importacion de la conexion a la base de datos, desde el archivo config.
 *
 */

include '../config/receiptModule/code128.php';
include '../config/databaseconnection.php';

session_start();

$conn = connection();

$user_id = $_SESSION['user_id'];

$reservation_id = $_GET['reservation_id'];

$query = "SELECT * FROM reservation
    INNER JOIN `show` ON reservation.show_id=show.show_id
    INNER JOIN film ON show.film_id=film.film_id
    INNER JOIN salon ON show.salon_id=salon.salon_id
    INNER JOIN user ON reservation.user_id=user.user_id
    INNER JOIN payment ON reservation.reservation_id=payment.reservation_id
    WHERE reservation.user_id=$user_id AND reservation.reservation_id=$reservation_id";

$result = $conn->query($query);

$data = $result->fetch_assoc();

$salon = $data['salon_name'];
$film = $data['title'];
$show_date = $data['show_date'] . '  ' . $data['start_at'];
$seat_list = $data['seat_reserved_list'];
$show_cost = $data['show_cost'];
$total_amount = $data['total_amount'];
$client = $data['first_name'] . ' ' . $data['last_name'];
$amount_ticket = round($total_amount / $show_cost);
$printed_date = date("Y-m-d h:i:a");
$receiptCode =$data['order_id'];

$pdf = new PDF_Code128('P', 'mm', array(80, 158));

$pdf->SetMargins(4, 10, 4);
$pdf->AddPage();


$pdf->SetFont('Arial', 'B', 14);
$pdf->SetTextColor(0, 0, 0);
$pdf->MultiCell(0, 5, utf8_decode("       CinemaBox"), 0, 'C', false);
$pdf->MultiCell(0, 5, utf8_decode(""), 0, 'C', false);
$pdf->SetFont('Arial', '', 9);
$pdf->MultiCell(0, 5, utf8_decode(strtoupper("_______________________________________")), 0, 'C', false);
$pdf->MultiCell(0, 5, utf8_decode("Salon: $salon"), 0, 'C', false);
$pdf->MultiCell(0, 5, utf8_decode("Pelicula $film"), 0, 'C', false);
$pdf->MultiCell(0, 5, utf8_decode("Fecha funcion: $show_date"), 0, 'C', false);
$pdf->MultiCell(0, 5, utf8_decode(strtoupper("_______________________________________")), 0, 'C', false);
$pdf->image('../public/img/box.png', 17, 4, -900);

$pdf->MultiCell(0, 5, utf8_decode("Asientos: $seat_list"), 0, 'C', false);
$pdf->MultiCell(0, 5, utf8_decode("Remiente: $client"), 0, 'C', false);
$pdf->MultiCell(0, 5, utf8_decode("Remitido en: $printed_date"), 0, 'C', false);


$pdf->MultiCell(0, 5, utf8_decode(""), 0, 'C', false);
$pdf->SetFont('Arial', 'B', 9);
$pdf->MultiCell(0, 4, utf8_decode("Informacion sobre tickets reservados"), 0, 'C', false);
$pdf->SetFont('Arial', '', 9);
$pdf->Ln(1);
$pdf->Cell(0, 5, utf8_decode("-------------------------------------------------------------------"), 0, 0, 'C');
$pdf->Ln(3);


$pdf->Cell(10, 5, utf8_decode(""), 0, 0, 'C');
$pdf->Cell(10, 5, utf8_decode("Cant."), 0, 0, 'C');
$pdf->Cell(19, 5, utf8_decode("  Precio Unit"), 0, 0, 'C');

$pdf->Cell(28, 5, utf8_decode("Total"), 0, 0, 'C');

$pdf->Ln(3);
$pdf->Cell(72, 5, utf8_decode("-------------------------------------------------------------------"), 0, 0, 'C');
$pdf->Ln(3);




$pdf->Cell(10, 4, utf8_decode(""), 0, 0, 'C');
$pdf->Cell(10, 4, utf8_decode("$amount_ticket"), 0, 0, 'C');
$pdf->Cell(19, 4, utf8_decode("  $$show_cost USD"), 0, 0, 'C');

$pdf->Cell(28, 4, utf8_decode("$$total_amount USD"), 0, 0, 'C');
$pdf->Ln(4);
$pdf->MultiCell(0, 4, utf8_decode(""), 0, 'C', false);
$pdf->Ln(7);



$pdf->MultiCell(0, 5, utf8_decode("*** Vendido de forma online. ***"), 0, 'C', false);

$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(0, 7, utf8_decode("GRACIAS POR SU COMPRA"), '', 0, 'C');

$pdf->Ln(9);

$pdf->Code128(5, $pdf->GetY(), "$receiptCode", 70, 20);
$pdf->SetXY(0, $pdf->GetY() + 21);
$pdf->SetFont('Arial', '', 14);
$pdf->MultiCell(0, 5, utf8_decode("$receiptCode"), 0, 'C', false);



$pdf->Output("I", "Ticket_Code_$receiptCode.pdf", true);