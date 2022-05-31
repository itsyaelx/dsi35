<?php //Inicio del bloque de codigo


//Recuperar datos desde el servidor
//No es necesario declarar las variables
//Las variables, constantes y arreglos llevan un "$"

    $NumLicencia=$_GET['Numero']; //Ve y saca el valor de lo que tenga el id de NumLicencia
    $Tipo=$_GET['Tipo'];
    $FechaExp=$_GET['FechaExp'];
    $FechaVencimiento=$_GET['FechaVencimiento'];
    $Restriccion=$_GET['Restriccion'];
    $IdConductor=$_GET['IdConductor'];

    print("Licencia: ".$NumLicencia."<br>"); //"." Se usa para concatenar
    print("Tipo: ".$Tipo."<br>");
    print("Fecha Exp: ".$FechaExp."<br>");
    print("Fecha Vencimiento: ".$FechaVencimiento."<br>");
    print("Restriccion: ".$Restriccion."<br>");
    print("IdConductor: ".$IdConductor."<br>");

    //Enviar datos al SMBD
    include("Conexion.php");
    $Con=Conectar();
    $SQL="INSERT INTO Licencias VALUES('$NumLicencia','$Tipo','$FechaExp','$FechaVencimiento','$Restriccion','$IdConductor')";
    $Result=Ejecutar($Con,$SQL);
    Desconectar($Con);

?>