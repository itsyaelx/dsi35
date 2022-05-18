<?php
require('fpdf.php'); //Invocar librería 
include("Conexion.php");
$TarjetaC = 1;
$Con=Conectar(); 
$SQL="SELECT T.FolioTarjeta, T.Uso, T.Operacion, T.OficionaExpedidora,
T.NCI, T.FechaExpedicion, V.IdVehiculo, V.Origen, V.Color, V.Cilindraje,
V.Capacidad, V.Puertas, V.Asientos, V.CodigoVehicular, V.Combustible,
V.Linea, V.Transmision, V.Clase, V.Tipo, V.RFA, V.Modelo, V.Placa,
V.NumSerie, V.Marca, V.SubMarca, 
P.IdPropietario, P.Localidad, P.Municipio, P.Nombre, P.RFC
        FROM TarjetasCirculacion T, Vehiculos V, Propietarios P
        WHERE T.FolioTarjeta='$TarjetaC'
        AND T.IdVehiculo=V.IdVehiculo
        AND T.IdPropietario=P.IdPropietario;";
$Result=Ejecutar($Con,$SQL);
$Fila=mysqli_fetch_row($Result);



$pdf = new FPDF('L','mm', array(55,85));
$pdf->SetAutoPageBreak(false);
$pdf->AddPage(); 
$pdf->SetFont('Arial','B',9); 
$pdf->SetXY(2,3);
$pdf->Cell(0,3,'PODER EJECUTIVO DEL',0,1); 
$pdf->SetXY(2,6);
$pdf->Cell(0,3,'ESTADO DE QUERETARO',0,1); 
$pdf->SetFont('Arial','B',5); 
$pdf->SetXY(2,8);
$pdf->Cell(0,3,'SECRETARIA DE PLANEACION Y FINANZAS',0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(2,11);
$pdf->Cell(0,3,'TIPO DE SERVICIO',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(2,12.5);
$pdf->Cell(10,3,$Fila[1],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(22,11);
$pdf->Cell(0,3,'HOLOGRAMA',0,1);

$pdf->SetXY(35,11);
$pdf->Cell(0,3,'FOLIO',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(35,12.5);
$pdf->Cell(15,3,$Fila[0],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(60,11);
$pdf->Cell(0,3,'PLACA',0,1);
$pdf->SetFont('Arial','B',5); 
$pdf->SetXY(60,12.5);
$pdf->Cell(0,3,$Fila[21],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(2,15);
$pdf->Cell(0,3,'PROPIETARIO',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(12,15);
$pdf->Cell(0,3,$Fila[28],0,1);


/////////////////////////
$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(2,18);
$pdf->Cell(0,3,'RFC',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(2,19.5);
$pdf->Cell(0,3,$Fila[29],0,1);
$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(2,21);
$pdf->Cell(0,3,'LOCALIDAD',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(2,22.5);
$pdf->Cell(0,3,$Fila[26],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(2,26);
$pdf->Cell(0,3,'MUNICIPIO',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(2,27.5);
$pdf->Cell(0,3,$Fila[27],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(2,30.5);
$pdf->Cell(0,3,'NUMERO DE CONSTANCIA',0,1);
$pdf->SetXY(2,32);
$pdf->Cell(0,3,'DE INSCRIPCION (NCI)',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(2,33.5);
$pdf->Cell(0,3,$Fila[4],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(2,35);
$pdf->Cell(0,3,'ORIGEN',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(2,36.5);
$pdf->Cell(0,3,$Fila[7],0,1);
$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(2,38);
$pdf->Cell(0,3,'COLOR',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(2,39.5);
$pdf->Cell(0,3,$Fila[8],0,1);

///////////////////////////////////////////
$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(23,18);
$pdf->Cell(0,3,'NUMERO DE SERIE',0,1);
$pdf->SetFont('Arial','',6); 
$pdf->SetXY(23,19.5);
$pdf->Cell(0,3,$Fila[22],0,1);
$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(23,21);
$pdf->Cell(0,3,'MARCA/LINEA/SUBLINEA',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(23,22.5);
$pdf->Cell(0,3,$Fila[23],0,1);
$pdf->SetXY(23,24);
$pdf->Cell(0,3,$Fila[24],0,1);
$pdf->SetXY(23,25.5);
$pdf->Cell(0,3,$Fila[15],0,1);
//$pdf->SetXY(23,27);
//$pdf->Cell(0,3,'ABC 1, 2 LTS., 6 CIL',0,1);

/////////////////////////////////////////////////////7///////////////////
$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(23,29.5);
$pdf->Cell(0,3,'CILINDRAJE',0,1);
$pdf->SetFont('Arial','',4); 
$pdf->SetXY(33,29.5);
$pdf->Cell(5,3,$Fila[9],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(23,31);
$pdf->Cell(0,3,'CAPACIDAD',0,1);
$pdf->SetFont('Arial','',4); 
$pdf->SetXY(33,31);
$pdf->Cell(5,3,$Fila[10],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(23,32.5);
$pdf->Cell(0,3,'PUERTAS',0,1);
$pdf->SetFont('Arial','',4); 
$pdf->SetXY(33,32.5);
$pdf->Cell(5,3,$Fila[11],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(23,34);
$pdf->Cell(0,3,'ASIENTOS',0,1);
$pdf->SetFont('Arial','',4); 
$pdf->SetXY(33,34);
$pdf->Cell(5,3,$Fila[12],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(23,35.5);
$pdf->Cell(0,3,'COMBUSTIBLE',0,1);
$pdf->SetFont('Arial','',4); 
$pdf->SetXY(34,35.5);
$pdf->Cell(5,3,$Fila[14],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(23,37);
$pdf->Cell(0,3,'TRANSMISION',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(23,38.5);
$pdf->Cell(0,3,$Fila[16],0,1);

//////////////////////////////////////////////////////////////77
$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(38,29.5);
$pdf->Cell(0,3,'CVE VEHICULAR',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(38,31);
$pdf->Cell(0,3,$Fila[13],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(38,32.5);
$pdf->Cell(0,3,'CLASE',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(45,32.5);
$pdf->Cell(0,3,$Fila[17],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(38,34);
$pdf->Cell(0,3,'TIPO',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(45,34);
$pdf->Cell(0,3,$Fila[18],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(38,35.5);
$pdf->Cell(0,3,'USO',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(45,35.5);
$pdf->Cell(0,3,'1',0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(38,37);
$pdf->Cell(0,3,'RFA',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(45,37);
$pdf->Cell(0,3,$Fila[19],0,1);

/////////////////////////////////////////////////////////////////////////////
$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(55,18);
$pdf->Cell(0,3,'MODELO',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(55,19.5);
$pdf->Cell(0,3,$Fila[20],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(55,21);
$pdf->Cell(0,3,'OPERACION',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(55,22.5);
$pdf->Cell(0,3,$Fila[2],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(55,24);
$pdf->Cell(0,3,'FOLIO',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(55,25.5);
$pdf->Cell(0,3,'2342/234324',0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(55,28);
$pdf->Cell(0,3,'FECHA DE EXPEDICION',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(55,29.5);
$pdf->Cell(0,3,$Fila[5],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(55,31);
$pdf->Cell(0,3,'OFICINA EXPEDIDORA',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(73,31);
$pdf->Cell(0,3,$Fila[3],0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(55,32.5);
$pdf->Cell(0,3,'MOVIMIENTO',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(55,34);
$pdf->Cell(0,3,'ALTA DE PLACA',0,1);

$pdf->SetFont('Arial','B',4); 
$pdf->SetXY(55,35.5);
$pdf->Cell(0,3,'NUMERO DE MOTOR',0,1);
$pdf->SetFont('Arial','',5); 
$pdf->SetXY(55,37);
$pdf->Cell(0,3,'H EN MEXICO',0,1);



$pdf->Output(); 
?>