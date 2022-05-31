<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
?>

<form method="get">
    <label> Valor </label> 
    <input type="text" name="Valor" id="Valor" required="true">
    <br>
    <label> Atributo </label> 
    <input type="radio" name="Atributo" id="Atributo" value="FolioCertificado" checked= "true" >FolioCertificado
    <input type="radio" name="Atributo" id="Atributo" value="TipoServicio">TipoServicio
    <input type="radio" name="Atributo" id="Atributo" value="HoraEntrada">HoraEntrada
    <input type="radio" name="Atributo" id="Atributo" value="HoraSalida">HoraSalida
    <input type="radio" name="Atributo" id="Atributo" value="TipoCarroceria">TipoCarroceria
    <input type="radio" name="Atributo" id="Atributo" value="Entidad">Entidad
    <input type="radio" name="Atributo" id="Atributo" value="Municipio">Municipio
    <input type="radio" name="Atributo" id="Atributo" value="NumCentro">NumCentro
    <input type="radio" name="Atributo" id="Atributo" value="NumLinea">NumLinea
    <input type="radio" name="Atributo" id="Atributo" value="Tecnico">Tecnico
    <input type="radio" name="Atributo" id="Atributo" value="FechaExpedicion">FechaExpedicion
    <input type="radio" name="Atributo" id="Atributo" value="Motivo">Motivo
    <input type="radio" name="Atributo" id="Atributo" value="Semestre">Semestre
    <input type="radio" name="Atributo" id="Atributo" value="Vigencia">Vigencia
    <input type="radio" name="Atributo" id="Atributo" value="IdVehiculo">IdVehiculo
    <br>
    <input type="submit">



</form>
<?php
    if(isset($_GET['Valor'])){
        $Valor = $_GET['Valor'];
        $Atributo = $_GET['Atributo'];
        include("Conexion.php");
        $Con=Conectar();
        $SQL="SELECT * FROM TarjetasVerificacion WHERE $Atributo Like '%$Valor%';";
        $Result=Ejecutar($Con,$SQL);
    
    
        //iniciar tabla
        print("<table border=1> <tr>
        <th>FolioCertificado</th>
        <th>TipoServicio</th>
        <th>HoraEntrada</th>
        <th>HoraSalida</th>
            <th>TipoCarroceria</th>
            <th>Entidad</th>
            <th>Municipio</th>
            <th>NumCentro</th>
                <th>NumLinea</th>
                <th>Tecnico</th>
                <th>FechaExpedicion</th>
                <th>Motivo</th>
                <th>Semestre</th>
                <th>Vigencia</th>
                <th>IdVehiculo</th>
                </tr>");
        for($f=0; $f<mysqli_num_rows($Result);$f++){
            $Fila=mysqli_fetch_row($Result); //Vector o arreglo de 1 dimensión
            print("<tr> <td>".$Fila[0]."</td> <td>".$Fila[1]."</td> <td>".$Fila[2]."</td> <td>".$Fila[3]."</td> <td>".$Fila[4]."</td> <td>".$Fila[5]."</td> <td>".$Fila[6]."</td> <td>".$Fila[7]."</td> <td>".$Fila[8]."</td> <td>".$Fila[9]."</td> <td>".$Fila[10]."</td> <td>".$Fila[11]."</td> <td>".$Fila[12]."</td> <td>".$Fila[13]."</td> <td>".$Fila[14]."</td> <td> <a href=UTarjetasVerificacion.php?FolioCertificado=".$Fila[0].">Actualiza </a> </td> <td> <a href=DTarjetasVerificacion.php?FolioCertificado=".$Fila[0].">Elimina </a> </td></tr>");
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
