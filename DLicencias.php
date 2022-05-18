<?php
    $Numero=$_GET['Numero'];
    $SQL="DELETE FROM Licencias WHERE Numero='$Numero';";

    include("Conexion.php");
    $Con=Conectar();
    $Result=Ejecutar($Con,$SQL);

    $RegistrosAfectados=mysqli_affected_rows($Con);
    print("Registros Eliminados: ".$RegistrosAfectados);

    Desconectar($Con);
?>