<?php
    session_start();
    if(isset($_SESSION['Usuario123'])) {

    
?>
<form method="get">
    <label> Valor </label> 
    <input type="text" name="Valor" id="Valor" required="true">
    <br>
    <label> Atributo </label> 
    <input type="radio" name="Atributo" id="Atributo" value="IdPropietario" checked= "true" >IdPropietario
    <input type="radio" name="Atributo" id="Atributo" value="Localidad">Localidad
    <input type="radio" name="Atributo" id="Atributo" value="Municipio">Municipio
    <input type="radio" name="Atributo" id="Atributo" value="Nombre">Nombre
    <input type="radio" name="Atributo" id="Atributo" value="RFC">RFC
    <br>
    <input type="submit">



</form>
<?php
    if(isset($_GET['Valor'])){
        $Valor = $_GET['Valor'];
        $Atributo = $_GET['Atributo'];
        include("Conexion.php");
        $Con=Conectar();
        $SQL="SELECT * FROM Propietarios WHERE $Atributo Like '%$Valor%';";
        $Result=Ejecutar($Con,$SQL);
    
    
            //iniciar tabla
        print("<table border=1> <tr>
        <th>IdPropietario</th>
        <th>Localidad</th>
        <th>Municipio</th>
        <th>Nombre</th>
        <th>RFC</th>
                </tr>");
        for($f=0; $f<mysqli_num_rows($Result);$f++){
            $Fila=mysqli_fetch_row($Result); //Vector o arreglo de 1 dimensión
            print("<tr> <td>".$Fila[0]."</td> <td>".$Fila[1]."</td> <td>".$Fila[2]."</td> <td>".$Fila[3]."</td> <td>".$Fila[4]."</td> </tr>");
        }
        //finalizar tabla
        print("</table>");

        Desconectar($Con);
    }

?>

<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>