<?php
    $Folio=$_GET['Folio'];
    $SQL="DELETE FROM Multas WHERE Folio='$Folio';";

    include("Conexion.php");
    $Con=Conectar();
    $Result=Ejecutar($Con,$SQL);

    $RegistrosAfectados=mysqli_affected_rows($Con);
    print("Registros Eliminados: ".$RegistrosAfectados);

    Desconectar($Con);
?>