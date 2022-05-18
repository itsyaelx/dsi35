<?php
require('fpdf.php'); //Invocar librería 
$pdf = new FPDF('P','mm', "A4"); //Iniciar el constructor. Permite establecer la orientación, unidad de medida y tamaño de página
$pdf->AddPage('P','A4','0'); //Default toma los del constructor, orientacio, tamaño, grados de giro
$pdf->SetFont('Arial','B',16); //Familia, estilo de fuente, tamaño
$pdf->Cell(40,10,'¡Hola, Mundo!',1,1); //Imprime celda de área rectangular
$pdf->SetXY(150,150);
$pdf->Cell(40,10,'¡Hola, Mundo2!',1); //Ancho, alto, cadena, borde, salto de linea, alineacion, 
//multicell la cadena si es muy larga se hacen varias lineas
$pdf->Output(); //d = descarga el archivo, I = abre el plugin (Archivo) en la web, f=descarga el archivo en el servidor
?>