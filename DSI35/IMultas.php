<?php

    $Folio=$_POST['Folio']; 
    $Agente=$_POST['Agente'];
    $ClaveAgente=$_POST['ClaveAgente'];
    $Motivo=$_POST['Motivo'];
    $Fundamento=$_POST['Fundamento'];
    $Fecha=$_POST['Fecha'];
    $Hora=$_POST['Hora'];
    $Lugar=$_POST['Lugar'];
    $Garantia=$_POST['Garantia'];
    $Propietario=$_POST['Propietario']; 
    $Entidad=$_POST['Entidad'];
    $Conductor=$_POST['Conductor'];
    $NumLicencia=$_POST['NumLicencia'];
    $FolioTarjeta=$_POST['FolioTarjeta'];
    $IdVehiculo=$_POST['IdVehiculo'];
    

    print("Folio: ".$Folio."<br>");
    print("Agente: ".$Agente."<br>");
    print("ClaveAgente: ".$ClaveAgente."<br>");
    print("Motivo: ".$Motivo."<br>");
    print("Fundamento: ".$Fundamento."<br>");
    print("Fecha: ".$Fecha."<br>");
    print("Hora: ".$Hora."<br>");
    print("Lugar: ".$Lugar."<br>");
    print("Garantia: ".$Garantia."<br>");
    print("Propietario: ".$Propietario."<br>");
    print("Entidad: ".$Entidad."<br>");
    print("Conductor: ".$Conductor."<br>");
    print("NumLicencia: ".$NumLicencia."<br>");
    print("FolioTarjeta: ".$FolioTarjeta."<br>");
    print("IdVehiculo: ".$IdVehiculo."<br>");

    include("Conexion.php");
    $Con=Conectar();
    $SQL="INSERT INTO Multas (Folio,Agente,ClaveAgente,Motivo,Fundamento,Fecha,Hora,Lugar,
    Garantia,Propietario,Entidad,Conductor,NumLicencia,FolioTarjeta,IdVehiculo) VALUES('$Folio','$Agente','$ClaveAgente',
    '$Motivo','$Fundamento','$Fecha','$Hora','$Lugar','$Garantia'
    ,'$Propietario','$Entidad','$Conductor','$NumLicencia','$FolioTarjeta','$IdVehiculo')";
    $Result=Ejecutar($Con,$SQL);
    Desconectar($Con);
?>

