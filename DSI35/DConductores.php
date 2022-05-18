<?php
    $Id=$_GET['Id'];
    $SQL="DELETE FROM Conductores WHERE Id='$Id';";

    include("Conexion.php");
    $Con=Conectar();
    $Result=Ejecutar($Con,$SQL);
    $RegistrosAfectados=mysqli_affected_rows($Con);
    print("Registros Eliminados: ".$RegistrosAfectados);

    Desconectar($Con);
?>