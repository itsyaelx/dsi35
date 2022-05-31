<?php

    $IdVehiculo=$_REQUEST['IdVehiculo']; //
    $Origen=$_REQUEST['Origen'];
    $Color=$_REQUEST['Color'];
    $Cilindraje=$_REQUEST['Cilindraje'];
    $Capacidad=$_REQUEST['Capacidad'];
    $Puertas=$_REQUEST['Puertas'];
    $Asientos=$_REQUEST['Asientos'];
    $CodigoVehicular=$_REQUEST['CodigoVehicular'];
    $Combustible=$_REQUEST['Combustible'];
    $Linea=$_REQUEST['Linea']; 
    $Transmision=$_REQUEST['Transmision'];
    $Clase=$_REQUEST['Clase'];
    $Tipo=$_REQUEST['Tipo'];
    $RFA=$_REQUEST['RFA'];
    $Modelo=$_REQUEST['Modelo'];
    $NumMotor=$_REQUEST['NumMotor'];
    $Placa=$_REQUEST['Placa'];
    $NumSerie=$_REQUEST['NumSerie'];
    $Marca=$_REQUEST['Marca']; 
    $SubMarca=$_REQUEST['SubMarca'];

    include("Conexion.php");
    $Con=Conectar();
    $SQL="INSERT INTO Vehiculos (IdVehiculo,Origen,Color,Cilindraje,Capacidad,Puertas,Asientos,CodigoVehicular,
    Combustible,Linea,Transmision,Clase,Tipo,RFA,Modelo,NumMotor,Placa,NumSerie,Marca,SubMarca) VALUES('$IdVehiculo','$Origen','$Color','$Cilindraje','$Capacidad','$Puertas','$Asientos','$CodigoVehicular','$Combustible'
    ,'$Linea','$Transmision','$Clase','$Tipo','$RFA','$Modelo','$NumMotor','$Placa','$NumSerie','$Marca','$SubMarca')";
    $Result=Ejecutar($Con,$SQL);
    Desconectar($Con);

    $Manejador = fopen($IdVehiculo.".xml", "w");

    $Texto = "<IdVehiculo>".$IdVehiculo."</IdVehiculo>\n".
            "<Origen>".$Origen."</Origen>\n".
            "<Color>".$Color."</Color>\n".
            "<Cilindraje>".$Cilindraje."</Cilindraje>\n".
            "<Capacidad>".$Capacidad."</Capacidad>\n".
            "<Puertas>".$Puertas."</Puertas>\n".
            "<Asientos>".$Asientos."</Asientos>\n".
            "<CodigoVehicular>".$CodigoVehicular."</CodigoVehicular>\n".
            "<Combustible>".$Combustible."</Combustible>\n".
            "<Linea>".$Linea."</Linea>\n".
            "<Transmision>".$Transmision."</Transmision>\n".
            "<Clase>".$Clase."</Clase>\n".
            "<Tipo>".$Tipo."</Tipo>\n".
            "<RFA>".$RFA."</RFA>\n".
            "<Modelo>".$Modelo."</Modelo>\n".
            "<NumMotor>".$NumMotor."</NumMotor>\n".
            "<Placa>".$Placa."</Placa>\n".
            "<NumSerie>".$NumSerie."</NumSerie>\n".
            "<Marca>".$Marca."</Marca>\n".
            "<SubMarca>".$SubMarca."</SubMarca>\n";

    fwrite($Manejador, $Texto);

    fclose($Manejador);
    
    require('fpdf.php');

    $pdf = new FPDF('P','mm', array(54,85));
    $pdf->SetAutoPageBreak(false);
    $pdf->AddPage(); 
    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(10,1);
    $pdf->Cell(0,3,'Estados Unidos Mexicanos',0,1); 
    $pdf->SetXY(10,3);
    $pdf->Cell(0,3,utf8_decode('Poder Ejecutivo del Estado de Querétaro'),0,1);
    $pdf->Image("Logo.jpg", 2,2,8,10);

    $pdf->SetFont('Arial','B',5); 
    $pdf->SetXY(10,6);
    $pdf->Cell(0,3,'Secretaria de Seguridad Ciudadana',0,1); 
    $pdf->SetFont('Arial','B',6); 
    $pdf->SetXY(10,9);
    $pdf->Cell(0,3,utf8_decode('Reporte de alta de vehículo'),0,1);

    $pdf->SetFont('Arial','',3); 
    $pdf->SetXY(37,15);
    $pdf->Cell(0,3,utf8_decode(date("d-m-Y h:i a")." UTC"),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,18);
    $pdf->Cell(0,3,utf8_decode('Id del vehículo: '.$IdVehiculo),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,21);
    $pdf->Cell(0,3,utf8_decode('Origen: '.$Origen),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,24);
    $pdf->Cell(0,3,utf8_decode('Color: '.$Color),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,27);
    $pdf->Cell(0,3,utf8_decode('Cilindraje: '.$Cilindraje),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,30);
    $pdf->Cell(0,3,utf8_decode('Capacidad: '.$Capacidad),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,33);
    $pdf->Cell(0,3,utf8_decode('Puertas: '.$Puertas),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,36);
    $pdf->Cell(0,3,utf8_decode('Asientos: '.$Asientos),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,39);
    $pdf->Cell(0,3,utf8_decode('Codigo vehicular: '.$CodigoVehicular),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,42);
    $pdf->Cell(0,3,utf8_decode('Combustible: '.$Combustible),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,45);
    $pdf->Cell(0,3,utf8_decode('Linea: '.$Linea),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,48);
    $pdf->Cell(0,3,utf8_decode('Transmision: '.$Transmision),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,51);
    $pdf->Cell(0,3,utf8_decode('Clase: '.$Clase),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,54);
    $pdf->Cell(0,3,utf8_decode('Tipo: '.$Tipo),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,57);
    $pdf->Cell(0,3,utf8_decode('RFA: '.$RFA),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,60);
    $pdf->Cell(0,3,utf8_decode('Modelo: '.$Modelo),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,63);
    $pdf->Cell(0,3,utf8_decode('NumMotor: '.$NumMotor),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,66);
    $pdf->Cell(0,3,utf8_decode('Placa: '.$Placa),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,69);
    $pdf->Cell(0,3,utf8_decode('NumSerie: '.$NumSerie),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,72);
    $pdf->Cell(0,3,utf8_decode('Marca: '.$Marca),2,1);

    $pdf->SetFont('Arial','',5); 
    $pdf->SetXY(1,75);
    $pdf->Cell(0,3,utf8_decode('Submarca: '.$SubMarca),2,1);




    $pdf->Output('F', $IdVehiculo.".pdf");


    
        

?>

