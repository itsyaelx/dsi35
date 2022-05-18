<?php

    $Id=$_POST['Id']; 
    $Domicilio=$_POST['Domicilio'];
    $GrupoSanguineo=$_POST['GrupoSanguineo'];
    $Nombre=$_POST['Nombre'];
    $FechaNacimiento=$_POST['FechaNacimiento'];
    $Firma=$_POST['Firma'];
    $Foto=$_POST['Foto'];
    $Donador=$_POST['Donador'];
    $Antiguedad=$_POST['Antiguedad'];



    print("Id: ".$Id."<br>");
    print("Domicilio: ".$Domicilio."<br>");
    print("GrupoSanguineo: ".$GrupoSanguineo."<br>");
    print("Nombre: ".$Nombre."<br>");
    print("FechaNacimiento: ".$FechaNacimiento."<br>");
    print("Firma: ".$Firma."<br>");
    print("Foto: ".$Foto."<br>");
    print("Donador: ".$Donador."<br>");
    print("Antiguedad: ".$Antiguedad."<br>");

    include("Conexion.php");
    $Con=Conectar();
    $SQL="INSERT INTO Conductores(Id,Domicilio,GrupoSanguineo,Nombre,FechaNacimiento,Firma,Foto,Donador,Antiguedad) VALUES('$Id','$Domicilio','$GrupoSanguineo','$Nombre','$FechaNacimiento','$Firma','$Foto','$Donador','$Antiguedad')";
    $Result=Ejecutar($Con,$SQL);
    Desconectar($Con);


?>
