<?php

require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$lista = explode(",",$_POST['kraj']);
if ($lista[0] != NULL AND $lista[1] != NULL AND $lista[2] != NULL AND $_POST['imie'] != NULL AND $_POST['nazwisko'] != NULL AND $_POST['liczba'] > 0) {
$kwota = $_POST['liczba'] * $lista[2];
$aktualna = date('d.m.Y H:i');
$pdf->Cell(190,10,$aktualna, 0, 1, 'R');
$pdf->Image('logo1.png',12,8,-200);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'Rezerwacja dokonana pomyslnie',1,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(95,10,'Imie: ', 1, 0, 'C');
$pdf->Cell(95,10,$_POST['imie'], 1, 1, 'C');
$pdf->Cell(95,10,'Nazwisko: ', 1, 0, 'C');
$pdf->Cell(95,10,$_POST['nazwisko'], 1, 1, 'C');
$pdf->Cell(95,10,'Kraj: ', 1, 0, 'C');
$pdf->Cell(95,10,$lista[0], 1, 1, 'C');
$pdf->Cell(95,10,'Kwota(zl): ', 1, 0, 'C');
$pdf->Cell(95,10,$kwota, 1, 1, 'C');
$lista[0];
}
else {
    $pdf->Cell(40,10,"Nieprawidlowe dane");
}

$pdf->Output();  

$link = mysqli_connect("127.0.0.1", "root", "") or die('B³¹d: Nie mo¿na po³¹czyæ z MySQL!');

mysqli_select_db($link, "wakacje") or die('B³¹d: Nie mo¿na wybra¿ bazy danych!');
$query = "INSERT INTO rezerwacje (imie, nazwisko, kraj, kwota) VALUES(?, ?, ?, ?)";
$stmt = $link->prepare($query);
$stmt->bind_param("sssd", $_POST['imie'], $_POST['nazwisko'], $lista[0], $kwota);
$stmt->execute();
/* $rezerwacje = "INSERT INTO rezerwacje (imie, nazwisko, kraj, kwota) VALUES ('.$_POST['imie'].', '.$_POST['nazwisko'].', '.$lista[0].', '.$kwota.')";
 */

?>