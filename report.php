<?php
require('config.php');
require('fpdf/fpdf.php');

date_default_timezone_set("America/Bogota");

function createReport(){
    global $username, $password, $servername, $dbname;
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',14);
    $pdf->Image('imagenes/logo.png',10,10,-150);
    $pdf->Ln(20);
    $pdf->Cell(90,20,'Fecha: '.date('d.m.Y.H.i.s').'',0);
    $pdf->Ln(10);
    $pdf->Cell(100,20,utf8_decode('Inventario'));
    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',11);
    $pdf->Cell(20,20,'COD');
    $pdf->Cell(50,20,'ARTICULO');
    $pdf->Cell(40,20,'MARCA');
    $pdf->Cell(20,20,'CANT');    
    $pdf->Cell(30,20,'PRECIO');    

    $pdf->Ln(10);

    $pdf->SetFont('Arial','',8);
    
    
    $query_select = 'SELECT * FROM inventarios';
    $result = mysqli_query($conn,$query_select);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($reg = mysqli_fetch_assoc($result)) {
            $pdf->Cell(20,20, $reg['id'], 0);
            $pdf->Cell(50,20, utf8_decode($reg['nombre']), 0);
            $pdf->Cell(40,20, utf8_decode($reg['marca']), 0);
            $pdf->Cell(20,20, utf8_decode($reg['cantidad']), 0);
            $pdf->Cell(30,20, utf8_decode($reg['precio']), 0);
            $pdf->Ln(10);
        }
    }
    $pdf->Output();
    mysqli_close($conn);
}
createReport();
header( "refresh:3;url=index.php" );