<?php

    $FolioTarjeta=$_GET['FolioTarjeta']; 
    $Uso=$_GET['Uso'];
    $Operacion=$_GET['Operacion'];
    $OficionaExpedidora=$_GET['OficionaExpedidora'];
    $NCI=$_GET['NCI'];
    $FechaExpedicion=$_GET['FechaExpedicion'];
    $IdVehiculo=$_GET['IdVehiculo'];
    $IdPropietario=$_GET['IdPropietario'];

    print("FolioTarjeta: ".$FolioTarjeta."<br>");
    print("Uso: ".$Uso."<br>");
    print("Operacion: ".$Operacion."<br>");
    print("OficionaExpedidora: ".$OficionaExpedidora."<br>");
    print("NCI: ".$NCI."<br>");
    print("FechaExpedicion: ".$FechaExpedicion."<br>");
    print("IdVehiculo: ".$IdVehiculo."<br>");
    print("IdPropietario: ".$IdPropietario."<br>");

    include("Conexion.php");
    $Con=Conectar();
    $SQL="INSERT INTO TarjetasCirculacion VALUES('$FolioTarjeta','$Uso','$Operacion','$OficionaExpedidora','$NCI','$FechaExpedicion',
    '$IdVehiculo','$IdPropietario')";
    $Result=Ejecutar($Con,$SQL);
    Desconectar($Con);

?>

