<?php
include("Conexion.php");
$Con=Conectar();
$SQL="UPDATE Licenciass SET Tipo='B' WHERE Numero=20";

////////////////////////
try{
    $Result= Ejecutar($Con,$SQL);
}catch(Exception $e){
    $Cadena=mysqli_error($Con);
    print($Cadena);
}

//////////////////////
Desconectar($Con);
?>





