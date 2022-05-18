<?php

    $IdVehiculo=$_REQUEST['IdVehiculo']; 
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


    print("IdVehiculo: ".$IdVehiculo."<br>");
    print("Origen: ".$Origen."<br>");
    print("Color: ".$Color."<br>");
    print("Cilindraje: ".$Cilindraje."<br>");
    print("Capacidad: ".$Capacidad."<br>");
    print("Puertas: ".$Puertas."<br>");
    print("Asientos: ".$Asientos."<br>");
    print("CodigoVehicular: ".$CodigoVehicular."<br>");
    print("Combustible: ".$Combustible."<br>");
    print("Linea: ".$Linea."<br>");
    print("Transmision: ".$Transmision."<br>");
    print("Clase: ".$Clase."<br>");
    print("Tipo: ".$Tipo."<br>");
    print("RFA: ".$RFA."<br>");
    print("Modelo: ".$Modelo."<br>");
    print("NumMotor: ".$NumMotor."<br>");
    print("Placa: ".$Placa."<br>");
    print("NumSerie: ".$NumSerie."<br>");
    print("Marca: ".$Marca."<br>");
    print("SubMarca: ".$SubMarca."<br>");

    include("Conexion.php");
    $Con=Conectar();
    $SQL="INSERT INTO Vehiculos (IdVehiculo,Origen,Color,Cilindraje,Capacidad,Puertas,Asientos,CodigoVehicular,
    Combustible,Linea,Transmision,Clase,Tipo,RFA,Modelo,NumMotor,Placa,NumSerie,Marca,SubMarca) VALUES('$IdVehiculo','$Origen','$Color','$Cilindraje','$Capacidad','$Puertas','$Asientos','$CodigoVehicular','$Combustible'
    ,'$Linea','$Transmision','$Clase','$Tipo','$RFA','$Modelo','$NumMotor','$Placa','$NumSerie','$Marca','$SubMarca')";
    $Result=Ejecutar($Con,$SQL);
    Desconectar($Con);


?>

