<?php


    $Id=$_POST['Id']; 
    $Domicilio=$_POST['Domicilio'];
    $GrupoSanguineo=$_POST['GrupoSanguineo'];
    $Nombre=$_POST['Nombre'];
    $FechaNacimiento=$_POST['FechaNacimiento'];
    //$Firma=$_POST['Firma'];
    //$Foto=$_POST['Foto'];
    $Donador=$_POST['Donador'];
    $Antiguedad=$_POST['Antiguedad'];



    print("Id: ".$Id."<br>");
    print("Domicilio: ".$Domicilio."<br>");
    print("GrupoSanguineo: ".$GrupoSanguineo."<br>");
    print("Nombre: ".$Nombre."<br>");
    print("FechaNacimiento: ".$FechaNacimiento."<br>");
    //print("Firma: ".$Firma."<br>");
    //print("Foto: ".$Foto."<br>");
    print("Donador: ".$Donador."<br>");
    print("Antiguedad: ".$Antiguedad."<br>");
    //echo $_FILES["Firma"]["type"];

    if($_FILES["Foto"]["error"]) {
        echo "Se ha producido un error" . $_FILES["Foto"]["error"];
    } else {
        if($_FILES["Foto"]["type"]=="image/jpg" || $_FILES["Foto"]["type"]=="image/jpeg" ) {
            if(move_uploaded_file($_FILES["Foto"]["tmp_name"],"C:\\xampp\htdocs\Proyecto Final\dsi35\imagenes\FotosConductores\Foto".$Id.".jpg")) {

            } else {
                echo "No se pudo mover el archivo";
            }
        } else {
            echo "Seleccione una imagen jpg";
        }

    }

    $Foto = "C:\\\\xampp\\\\htdocs\\\\Proyecto Final\\\\dsi35\\\\imagenes\\\\FotosConductores\\\\Foto".$Id.".jpg";


    
    if($_FILES["Firma"]["error"]) {
        echo "Se ha producido un error" . $_FILES["Firma"]["error"];
    } else {
        if($_FILES["Firma"]["type"]=="image/jpg" || $_FILES["Firma"]["type"]=="image/jpeg" ) {
            if(move_uploaded_file($_FILES["Firma"]["tmp_name"],"C:\\xampp\htdocs\Proyecto Final\dsi35\imagenes\FirmasConductores\Firma".$Id.".jpg")) {
                
                $Firma = "C:\\\\xampp\\\\htdocs\\\\Proyecto Final\\\\dsi35\\\\imagenes\\\\FirmasConductores\\\\Firma".$Id.".jpeg";

                include("Conexion.php");
                $Con=Conectar();
                $SQL="INSERT INTO Conductores(Id,Domicilio,GrupoSanguineo,Nombre,FechaNacimiento,Firma,Foto,Donador,Antiguedad) VALUES('$Id','$Domicilio','$GrupoSanguineo','$Nombre','$FechaNacimiento','$Firma','$Foto','$Donador','$Antiguedad')";
                $Result=Ejecutar($Con,$SQL);
                Desconectar($Con);
            } else {
                echo "No se pudo mover el archivo";
            }
        } else {
            echo "Seleccione una imagen jpg";
        }

    }

    





?>
