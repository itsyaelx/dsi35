<?php
    $FolioTarjeta=$_GET['FolioTarjeta'];
    $SQL="DELETE FROM TarjetasCirculacion WHERE FolioTarjeta='$FolioTarjeta';";

    include("Conexion.php");
    $Con=Conectar();
    $Result=Ejecutar($Con,$SQL);
    $RegistrosAfectados=mysqli_affected_rows($Con);
    print("Registros Eliminados: ".$RegistrosAfectados);

    Desconectar($Con);
?>