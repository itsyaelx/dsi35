<form method="get">
    <label> Valor </label> 
    <input type="text" name="Valor" id="Valor" required="true">
    <br>
    <label> Atributo </label> 
    <input type="radio" name="Atributo" id="Atributo" value="FolioTarjeta" checked= "true" >FolioTarjeta
    <input type="radio" name="Atributo" id="Atributo" value="Uso">Uso
    <input type="radio" name="Atributo" id="Atributo" value="Operacion">Operacion
    <input type="radio" name="Atributo" id="Atributo" value="OficionaExpedidora">OficinaExpedidora
    <input type="radio" name="Atributo" id="Atributo" value="NCI">NCI
    <input type="radio" name="Atributo" id="Atributo" value="FechaExpedicion">FechaExpedicion
    <input type="radio" name="Atributo" id="Atributo" value="IdVehiculo">IdVehiculo
    <input type="radio" name="Atributo" id="Atributo" value="IdPropietario">IdPropietario
    <br>
    <input type="submit">



</form>
<?php
    if(isset($_GET['Valor'])){
        $Valor = $_GET['Valor'];
        $Atributo = $_GET['Atributo'];
        include("Conexion.php");
        $Con=Conectar();
        $SQL="SELECT * FROM TarjetasCirculacion WHERE $Atributo Like '%$Valor%';";
        $Result=Ejecutar($Con,$SQL);
    
    
        //iniciar tabla
        print("<table border=1> <tr>
        <th>FolioTarjeta</th>
        <th>Uso</th>
        <th>Operacion</th>
        <th>OficinaExpedidora</th>
            <th>NCI</th>
            <th>FechaExpedicion</th>
            <th>IdVehiculo</th>
            <th>IdPropietario</th>
                </tr>");
        for($f=0; $f<mysqli_num_rows($Result);$f++){
            $Fila=mysqli_fetch_row($Result); //Vector o arreglo de 1 dimensión
            print("<tr> <td>".$Fila[0]."</td> <td>".$Fila[1]."</td> <td>".$Fila[2]."</td> <td>".$Fila[3]."</td> <td>".$Fila[4]."</td> <td>".$Fila[5]."</td> <td>".$Fila[6]."</td> <td>".$Fila[7]."</td> <td> <a href=UTarjetasCirculacion.php?FolioTarjeta=".$Fila[0].">Actualiza </a> </td> <td> <a href=DTarjetasCirculacion.php?FolioTarjeta=".$Fila[0].">Elimina </a> </td>  </tr>");
        }
        //finalizar tabla
        print("</table>");

        Desconectar($Con);
    }

?>