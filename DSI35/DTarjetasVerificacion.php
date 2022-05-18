<?php
    $FolioCertificado=$_GET['FolioCertificado'];
    $SQL="DELETE FROM TarjetasVerificacion WHERE FolioCertificado='$FolioCertificado';";

    include("Conexion.php");
    $Con=Conectar();
    $Result=Ejecutar($Con,$SQL);
    $RegistrosAfectados=mysqli_affected_rows($Con);
    print("Registros Eliminados: ".$RegistrosAfectados);

    Desconectar($Con);
?>