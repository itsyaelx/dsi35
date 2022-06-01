<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
?>


<?php
	$FolioTarjeta = $_REQUEST['FolioTarjeta'];
	include ("Conexion.php");
	$Con = Conectar();
	$SQL="SELECT * FROM TarjetasCirculacion WHERE FolioTarjeta = '$FolioTarjeta'";
	$Result=Ejecutar($Con,$SQL);
	$Fila = mysqli_fetch_row($Result);
	Desconectar($Con);
?>

<html>

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tarjetas de Circulacion</title>
        <link rel="stylesheet" href="styles\styles.css">
    </head>

	<div id="contenedor_logos">
        <div id="contenedor_logo_gob">
            <img id="logo_gob" src="imagenes\FInicio_Sesion\logo gob queretaro.jpeg" alt="">
        </div>
		<label class="titulo"> Actualizar Tarjetas de Circulación </label>
                <a href="MenuA.php">Menu</a>
        <img id="logo_gob2" src="imagenes\FInicio_Sesion\logo2 gob.jpeg" alt="">
    </div>

	<form method="get" action="UTarjetasCirculacion.php">
		<p>
		<label> FolioTarjeta </label>
		<input type="number" id="FolioTarjeta" name="FolioTarjeta" required="Requerido" value="<?php print($Fila[0]); ?>">
		<br>
		<label> Uso</label>
		<input type="text" id="Uso" name="Uso" required="Requerido" value="<?php print($Fila[1]); ?>">
		<br>
		<label> Operacion</label>
		<input type="text" id="Operacion" name="Operacion" required="Requerido" value="<?php print($Fila[2]); ?>">
		<br>
		<label> OficionaExpedidora</label>
		<input type="text" id="OficionaExpedidora" name="OficionaExpedidora" required="Requerido" value="<?php print($Fila[3]); ?>">
		<br>
		<label> NCI</label>
		<input type="text" id="NCI" name="NCI" required="Requerido" value="<?php print($Fila[4]); ?>">
		<br>
		<label> FechaExpedicion</label>
		<input type="date" id=" FechaExpedicion" name=" FechaExpedicion" required="Requerido" value="<?php print($Fila[5]); ?>">
		<br>
		<label> IdVehiculo</label>
		<input type="number" id="IdVehiculo" name="IdVehiculo" required="Requerido" value="<?php print($Fila[6]); ?>">
		<br>
		<label> IdPropietario</label>
		<input type="number" id="IdPropietario" name="IdPropietario" required="Requerido" value="<?php print($Fila[7]); ?>">
		<br>
		
		
		<input class="enviar" type="submit">
	</form>

</html>

<?php
	if(isset($_GET["Uso"])) {
		$FolioTarjeta=$_GET['FolioTarjeta']; 
		$Uso=$_GET['Uso'];
		$Operacion=$_GET['Operacion'];
		$OficionaExpedidora=$_GET['OficionaExpedidora'];
		$NCI=$_GET['NCI'];
		$FechaExpedicion=$_GET['FechaExpedicion'];
		$IdVehiculo=$_GET['IdVehiculo'];
		$IdPropietario=$_GET['IdPropietario'];

		$Con = Conectar();
		$SQL="UPDATE TarjetasCirculacion SET FolioTarjeta='$FolioTarjeta', Uso='$Uso', Operacion='$Operacion', OficionaExpedidora='$OficionaExpedidora',
		NCI='$NCI', FechaExpedicion='$FechaExpedicion', IdVehiculo='$IdVehiculo', IdPropietario='$IdPropietario' WHERE FolioTarjeta='$FolioTarjeta' ";
		$Result=Ejecutar($Con,$SQL);
		print("Registros Actualizados= ". mysqli_affected_rows($Con));
		Desconectar($Con);
		print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=CTarjetasCirculacion.php">');
	}

?>

<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>