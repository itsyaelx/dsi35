<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
?>

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tarjetas de Criculacion</title>
        <link rel="stylesheet" href="styles\styles.css">
    </head>

	<div id="contenedor_logos">
        <div id="contenedor_logo_gob">
            <img id="logo_gob" src="imagenes\FInicio_Sesion\logo gob queretaro.jpeg" alt="">
        </div>
		<label class="titulo"> Consultar Tarjetas de Circulación </label>
                <a href="MenuA.php">Menu</a>
        <img id="logo_gob2" src="imagenes\FInicio_Sesion\logo2 gob.jpeg" alt="">
    </div>


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
    <input class="enviar" type="submit">



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

<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>