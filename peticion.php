<?php
    require 'tabla.php';
    $pdf = new PDF_MC_Table();
    $pdf->AddPage();
    $nombre = $_GET['nombre'];
    $ciudad = $_GET['ciudad'];
    $cedula = $_GET['documento'];
    $hechos = $_GET['hechos'];
    $demandado=$_GET['demandado'];
    $pretenciones = $_GET['pretenciones'];
    $pruebas = $_GET['pruebas'];
    $numero = $_GET['numero'];
    $mes = date("m");


    if($mes==12){
        $mes = 'Diciembre';
    }else if($mes==11){
        $mes = 'Noviembre';
    }
    $fecha = date("d") . " de " .$mes . " del " . date("Y");


    $pdf->SetFont('Arial','',11);
    $pdf->Ln(3);
    $pdf->Cell(70,15,utf8_decode($ciudad.",  ".$fecha),0,1,'C');
    $pdf->Cell(20,15,utf8_decode("SEÑORES"),0,1,'L');
    $pdf->Ln(3);
    $pdf->Cell(14,5,utf8_decode($demandado),0,1,'L');
    $pdf->Cell(25,25,utf8_decode("Cordial saludo, ".$nombre.", identificado con el número de cédula ".$cedula.", actuando"),0,1,'L');
    $pdf->Cell(25,-13,utf8_decode("en representación de la menor de edad María Camila González Mendoza, me dirijo a ustedes de forma"),0,1,'L');
    $pdf->Cell(25,25,utf8_decode("forma respetuosa con el fin de presentar petición según lo consagrado en el artículo 23 de la Constitución "),0,1,'L');
    $pdf->Cell(25,-13,utf8_decode("Política de Colombia por los siguientes hechos:"),0,1,'L');
    $pdf->Ln(1);
    $pdf->Cell(25,30,utf8_decode("1. ".$hechos),0,1,'L');
    $pdf->Ln(3);
    $pdf->Cell(25,0,utf8_decode("Con base en lo anterior, presento las siguientes:"),0,1,'L');
    $pdf->Ln(3);
    $pdf->Cell(25,20,utf8_decode("Pretenciones"),0,1,'L');
    $pdf->Ln(1);
    $pdf->MultiCell(25,0,utf8_decode("       - ".$pretenciones),0,1,'L');
    $pdf->Ln(3);
    $pdf->Cell(25,20,utf8_decode("Pruebas"),0,1,'L');
    $pdf->Ln(1);
    $pdf->MultiCell(25,0,utf8_decode("       - ".$pruebas),0,1,'L');

    $pdf->Ln(1);
    $pdf->Cell(25,40,utf8_decode("Notificaciones"),0,1,'L');
    $pdf->Ln(1);
    $pdf->Cell(25,-30,utf8_decode("Recibiré notificaciones en la dirección XXX y correo xxxx@xxx.com"),0,1,'L');


$pdf->Output();















 ?>
