<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
?>

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Multas</title>
        <link rel="stylesheet" href="styles\styles.css">
    </head>

	<div id="contenedor_logos">
        <div id="contenedor_logo_gob">
            <img id="logo_gob" src="imagenes\FInicio_Sesion\logo gob queretaro.jpeg" alt="">
        </div>
		<label class="titulo"> Consultar Multas </label>
        <div>
                <a href="MenuA.php">Menu</a>
            </div>
        <img id="logo_gob2" src="imagenes\FInicio_Sesion\logo2 gob.jpeg" alt="">
    </div>

<form method="get">
    <label> Valor </label> 
    <input type="text" name="Valor" id="Valor" required="true">
    <br>
    <label> Atributo </label> 
    <input type="radio" name="Atributo" id="Atributo" value="Folio" checked= "true" >Folio
    <input type="radio" name="Atributo" id="Atributo" value="Agente">Agente
    <input type="radio" name="Atributo" id="Atributo" value="ClaveAgente">ClaveAgente
    <input type="radio" name="Atributo" id="Atributo" value="Motivo">Motivo
    <input type="radio" name="Atributo" id="Atributo" value="Fundamento">Fundamento
    <input type="radio" name="Atributo" id="Atributo" value="Fecha">Fecha
    <input type="radio" name="Atributo" id="Atributo" value="Hora">Hora
    <input type="radio" name="Atributo" id="Atributo" value="Lugar">Lugar
    <input type="radio" name="Atributo" id="Atributo" value="Garantia">Garantia
    <input type="radio" name="Atributo" id="Atributo" value="Propietario">Propietario
    <input type="radio" name="Atributo" id="Atributo" value="Entidad">Entidad
    <input type="radio" name="Atributo" id="Atributo" value="Conductor">Conductor
    <input type="radio" name="Atributo" id="Atributo" value="NumLicencia">NumLicencia
    <input type="radio" name="Atributo" id="Atributo" value="FolioTarjeta">FolioTarjeta
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
        $SQL="SELECT * FROM Multas WHERE $Atributo Like '%$Valor%';";
        $Result=Ejecutar($Con,$SQL);
    
    
        //iniciar tabla
        print("<table border =1> <tr>
        <th>Folio</th>
        <th>Agente</th>
            <th>ClaveAgente</th>
            <th>Motivo</th>
            <th>Fundamento</th>
            <th>Fecha</th>
                <th>Hora</th>
                <th>Lugar</th>
                <th>Garantia</th>
                <th>Propietario</th>
                <th>Entidad</th>
                <th>Conductor</th>
                <th>NumLicencia</th>
                <th>FolioTarjeta</th>
                <th>IdVehiculo</th>
                </tr>");
        for($f=0; $f<mysqli_num_rows($Result);$f++){
            $Fila=mysqli_fetch_row($Result); //Vector o arreglo de 1 dimensión
            print("<tr> <td>".$Fila[0]."</td> <td>".$Fila[1]."</td> <td>".$Fila[2]."</td> <td>".$Fila[3]."</td> <td>".$Fila[4]."</td> <td>".$Fila[5]."</td> <td>".$Fila[6]."</td> <td>".$Fila[7]."</td> <td>".$Fila[8]."</td> <td>".$Fila[9]."</td> <td>".$Fila[10]."</td> <td>".$Fila[11]."</td> <td>".$Fila[12]."</td> <td>".$Fila[13]."</td> <td>".$Fila[14]."</td> <td> <a href=UMultas.php?Folio=".$Fila[0].">Actualiza </a> </td> <td> <a href=DMultas.php?Folio=".$Fila[0].">Elimina </a> </td>  </tr>");
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