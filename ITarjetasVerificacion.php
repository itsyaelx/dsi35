<?php

    $FolioCertificado=$_REQUEST['FolioCertificado']; 
    $TipoServicio=$_REQUEST['TipoServicio'];
    $HoraEntrada=$_REQUEST['HoraEntrada'];
    $HoraSalida=$_REQUEST['HoraSalida'];
    $TipoCarroceria=$_REQUEST['TipoCarroceria'];
    $Entidad=$_REQUEST['Entidad'];
    $Municipio=$_REQUEST['Municipio'];
    $NumCentro=$_REQUEST['NumCentro'];
    $NumLinea=$_REQUEST['NumLinea'];
    $Tecnico=$_REQUEST['Tecnico'];
    $FechaExpedicion=$_REQUEST['FechaExpedicion']; 
    $Motivo=$_REQUEST['Motivo'];
    $Semestre=$_REQUEST['Semestre'];
    $Vigencia=$_REQUEST['Vigencia'];
    $IdVehiculo=$_REQUEST['IdVehiculo'];
    
    print("FolioCertificado: ".$FolioCertificado."<br>");
    print("TipoServicio: ".$TipoServicio."<br>");
    print("HoraEntrada: ".$HoraEntrada."<br>");
    print("HoraSalida: ".$HoraSalida."<br>");
    print("TipoCarroceria: ".$TipoCarroceria."<br>");
    print("Entidad: ".$Entidad."<br>");
    print("Municipio: ".$Municipio."<br>");
    print("NumCentro: ".$NumCentro."<br>");
    print("NumLinea: ".$NumLinea."<br>");
    print("Tecnico: ".$Tecnico."<br>");
    print("FechaExpedicion: ".$FechaExpedicion."<br>");
    print("Motivo: ".$Motivo."<br>");
    print("Semestre: ".$Semestre."<br>");
    print("Vigencia: ".$Vigencia."<br>");
    print("IdVehiculo: ".$IdVehiculo."<br>");

    include("Conexion.php");
    $Con=Conectar();
    $SQL="INSERT INTO tarjetasVerificacion VALUES('$FolioCertificado',
    '$TipoServicio','$HoraEntrada','$HoraSalida','$TipoCarroceria','$Entidad','$Municipio','$NumCentro','$NumLinea'
    ,'$Tecnico','$FechaExpedicion','$Motivo','$Semestre','$Vigencia','$IdVehiculo')";
    $Result=Ejecutar($Con,$SQL);
    Desconectar($Con);
    print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=FTarjetasVerificacion.php">');
?>

