<?php //Inicio del bloque de codigo


//Recuperar datos desde el servidor
//No es necesario declarar las variables
//Las variables, constantes y arreglos llevan un "$"

    //$NumLicencia=$_GET['Numero']; //Ve y saca el valor de lo que tenga el id de NumLicencia
    require('fpdf.php');//
    $Tipo=$_GET['Tipo'];
    $FechaExp=$_GET['FechaExp'];
    $FechaVencimiento=$_GET['FechaVencimiento'];
    $Restriccion=$_GET['Restriccion'];
    $IdConductor=$_GET['IdConductor'];

    //print("Licencia: ".$NumLicencia."<br>"); //"." Se usa para concatenar
    //

    //Enviar datos al SMBD
    include("Conexion.php");
    $Con=Conectar();
    $SQL="INSERT INTO Licencias VALUES('NULL','$Tipo','$FechaExp','$FechaVencimiento','$Restriccion','$IdConductor')";
    $Result=Ejecutar($Con,$SQL);


    //Creación de XML
    $SQL="SELECT MAX(Numero) as Numero FROM Licencias";
    $Result=Ejecutar($Con,$SQL);
    $Fila = mysqli_fetch_row($Result);
    $NumLicencia = $Fila[0];

    $Manejador = fopen($NumLicencia.".xml", "w");

    $Texto = "<NumLicencia>".$NumLicencia."</NumLicencia> \n".
            "<Tipo>".$Tipo."</Tipo> \n".
            "<FechaExp>".$FechaExp."</FechaExp> \n".
            "<FechaVencimiento>".$FechaVencimiento."</FechaVencimiento>\n".
            "<Restriccion>".$Restriccion."</Restriccion>\n".
            "<IdConductor>".$IdConductor."</IdConductor>\n";

    fwrite($Manejador, $Texto);

    fclose($Manejador);

    //CREACIÓN DE PDF

    $SQL="SELECT L.Numero, L.Tipo, L.FechaExp,
    L.FechaVencimiento, L.Restriccion, C.Nombre, C.FechaNacimiento, 
    C.Domicilio, C.GrupoSanguineo, C.Donador, C.Antiguedad
        FROM Licencias L, Conductores C
        WHERE L.Numero='$NumLicencia'
        AND L.IdConductor=C.Id;";
    $Result=Ejecutar($Con,$SQL);

    $Fila=mysqli_fetch_row($Result);


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
    $pdf->Cell(0,3,'Licencia para conducir',0,1); 

    //Foto persona
    //$pdf->SetXY(10,9);
    $pdf->Image("Persona.jpg", 33,12,17,20);
    $pdf->SetFont('Arial','',2); 
    $pdf->SetXY(24,20);
    $pdf->Cell(0,3,'No. de Licencia',0,1); 
    $pdf->SetFont('Arial','B',9); 
    $pdf->SetXY(12,23);
    $pdf->Cell(20,3,$Fila[0],0,1,'R');
    $pdf->SetFont('Arial','B',5); 
    $pdf->SetXY(20,27);
    $pdf->Cell(0,3,'Automovilista',0,1);
    //Datos
    $pdf->SetFont('Arial','',3); 
    $pdf->SetXY(45,32);
    $pdf->Cell(0,3,'Nombre',2,1); 

    $pdf->SetFont('Arial','',9); 
    $pdf->SetXY(35,35);
    $pdf->MultiCell(15,3,$Fila[5],0,'R');

    $pdf->SetFont('Arial','B',4); 
    $pdf->SetXY(40,42);
    $pdf->Cell(0,3,'Observaciones',0,1);

    //Fechas
    $pdf->SetFont('Arial','B',4); 
    $pdf->SetXY(2,50);
    $pdf->Cell(0,3,'Fecha de Nacimiento',0,1);
    $pdf->SetFont('Arial','',8); 
    $pdf->SetXY(2,53);
    $pdf->Cell(0,3,$Fila[6],0,1);

    $pdf->SetFont('Arial','B',4); 
    $pdf->SetXY(2,57);
    $pdf->Cell(0,3,'Fecha de Expedición',0,1);
    $pdf->SetFont('Arial','',8); 
    $pdf->SetXY(2,60);
    $pdf->Cell(0,3,$Fila[2],0,1);

    $pdf->SetFont('Arial','B',4); 
    $pdf->SetXY(2,64);
    $pdf->Cell(0,3,'Valida hasta',0,1);
    $pdf->SetFont('Arial','B',8); 
    $pdf->SetXY(2,67);
    $pdf->Cell(5,3,$Fila[3],0,1);

    $pdf->SetFont('Arial','B',4); 
    $pdf->SetXY(2,70);
    $pdf->Cell(0,3,'Antiguedad',0,1);
    $pdf->SetFont('Arial','',9); 
    $pdf->SetXY(2,73);
    $pdf->Cell(0,3,$Fila[10],0,1);

    $pdf->SetFont('Arial','',15); 
    $pdf->SetXY(4,78);
    $pdf->Cell(0,3,$Fila[1],0,1);

    //Firma
    $pdf->Image("Firma.jpg", 20,68,15,15);
    $pdf->SetFont('Arial','',4); 
    $pdf->SetXY(14,77);
    $pdf->Cell(0,3,'AUTORIZADO PARA QUE LA PRESENTE SEA',0,1);
    $pdf->SetXY(14,79);
    $pdf->Cell(0,3,'RECABADA COMO GARANTIA DE INFRACCION',0,1);

    //Reverso
    $pdf->AddPage(); 
    $pdf->Image("Emergencias.jpg", 2,2,12,7);
    $pdf->Image("Denuncia.jpg", 40,2,12,7);
    $pdf->SetFont('Arial','',10); 
    $pdf->SetXY(16,4);
    $pdf->Cell(0,3,'A123456789',0,1);

    $pdf->SetFont('Arial','B',4); 
    $pdf->SetXY(43,10);
    $pdf->Cell(0,3,'Domicilio',0,1);
    $pdf->SetFont('Arial','',6); 
    $pdf->SetXY(39,12);
    $pdf->Cell(15,3,$Fila[7],0,1,'R');



    $pdf->SetFont('Arial','B',4); 
    $pdf->SetXY(2,29);
    $pdf->Cell(0,3,'Restricciones',0,0);
    $pdf->SetFont('Arial','',6); 
    $pdf->SetXY(2,31);
    $pdf->Cell(0,3,$Fila[4],0,0);

    $pdf->SetFont('Arial','B',4); 
    $pdf->SetXY(40,29);
    $pdf->Cell(0,3,'Grupo Sanguineo',0,0);
    $pdf->SetFont('Arial','',6); 
    $pdf->SetXY(43,31);
    $pdf->Cell(10,3,$Fila[8],0,0,'R');
    $pdf->SetFont('Arial','B',4); 
    $pdf->SetXY(38,33);
    $pdf->Cell(0,3,'Donador de Organos',0,0);
    $pdf->SetFont('Arial','',6); 
    $pdf->SetXY(43,35);
    $pdf->Cell(10,3,$Fila[9],0,0,'R');
    $pdf->SetFont('Arial','B',4); 
    $pdf->SetXY(36,37);
    $pdf->Cell(0,3,'Numero de Emergencias',0,0);
    $pdf->SetFont('Arial','',6); 
    $pdf->SetXY(34,39);
    $pdf->Cell(0,3,'000-442-129-4492',0,0);

    //Firma
    $pdf->Image("Firma2.png", 37,46,12,12);
    $pdf->SetFont('Arial','B',4); 
    $pdf->SetXY(19,59);
    $pdf->Cell(0,3,'M. EN AP. JUAN MARCOS GRANADOS TORRES',0,1);
    $pdf->SetXY(21,61);
    $pdf->Cell(0,3,'SECRETARIO DE SEGURIDAD CIUDADANA',0,1);

    $pdf->SetXY(2,62);
    $pdf->Cell(0,3,'Fundamento Legal',0,1);

    $pdf->SetFont('Arial','',4); 
    $pdf->SetXY(2,64);
    $pdf->MultiCell(0,3,'Ausdlfhsdofhsipdfj dsjfiodsjf iodshfu sdh osd hodshf osdhgoisdhgoshdgo hw8egdsuh sdh osdhgodsh gs8dhg odshg dhg 
    dsuigh disgid hogsdihgodsgoihdsoghdsioghdsofhdsohdsohg sgh sdg 
    sd fhdsigdis gdsighsdg',0,1);

    $pdf->Output('F', $NumLicencia.".pdf"); 


    Desconectar($Con);


?>