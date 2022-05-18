<?php
    $IdVehiculo=$_GET['IdVehiculo'];
    $SQL="DELETE FROM Vehiculos WHERE IdVehiculo='$IdVehiculo';";

    include("Conexion.php");
    $Con=Conectar();
    $Result=Ejecutar($Con,$SQL);
    $RegistrosAfectados=mysqli_affected_rows($Con);
    print("Registros Eliminados: ".$RegistrosAfectados);

    Desconectar($Con);
?>