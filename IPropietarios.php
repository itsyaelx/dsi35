<?php

    $IdPropietario=$_POST['IdPropietario']; 
    $Localidad=$_POST['Localidad'];
    $Municipio=$_POST['Municipio'];
    $Nombre=$_POST['Nombre'];
    $RFC=$_POST['RFC'];

    print("IdPropietario: ".$IdPropietario."<br>");
    print("Localidad: ".$Localidad."<br>");
    print("Municipio: ".$Municipio."<br>");
    print("Nombre: ".$Nombre."<br>");
    print("RFC: ".$RFC."<br>");

        //Enviar datos al SMBD
        include("Conexion.php");
        $Con=Conectar();
        $SQL="INSERT INTO Propietarios VALUES('$IdPropietario','$Localidad','$Municipio','$Nombre','$RFC')";
        $Result=Ejecutar($Con,$SQL);
        Desconectar($Con);
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=FPropietarios.php">');
?>
