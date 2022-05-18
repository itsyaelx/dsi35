<?php
    $IdPropietario=$_GET['IdPropietario'];
    $SQL="DELETE FROM Propietarios WHERE IdPropietario='$IdPropietario';";

    include("Conexion.php");
    $Con=Conectar();
    $Result=Ejecutar($Con,$SQL);
    $RegistrosAfectados=mysqli_affected_rows($Con);
    print("Registros Eliminados: ".$RegistrosAfectados);

    Desconectar($Con);
?>