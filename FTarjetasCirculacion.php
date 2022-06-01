<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
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
		<label class="titulo"> Tarjetas de Circulación </label>
                <a href="MenuA.php">Menu</a>
        <img id="logo_gob2" src="imagenes\FInicio_Sesion\logo2 gob.jpeg" alt="">
    </div>
	<form class="formulario" method="get" action="ITarjetasCirculacion.php">
		<p>
		<label> FolioTarjeta </label>
		<input type="number" id="FolioTarjeta" name="FolioTarjeta" required="Requerido">
		<br>
		<label> Uso</label>
		<input type="text" id="Uso" name="Uso" required="Requerido">
		<br>
		<label> Operacion</label>
		<input type="text" id="Operacion" name="Operacion" required="Requerido">
		<br>
		<label> OficionaExpedidora</label>
		<input type="text" id="OficionaExpedidora" name="OficionaExpedidora" required="Requerido">
		<br>
		<label> NCI</label>
		<input type="text" id="NCI" name="NCI" required="Requerido">
		<br>
		<label> FechaExpedicion</label>
		<input type="date" id=" FechaExpedicion" name=" FechaExpedicion" required="Requerido">
		<br>
		<label> IdVehiculo</label>
		<input type="number" id="IdVehiculo" name="IdVehiculo" required="Requerido">
		<br>
		<label> IdPropietario</label>
		<input type="number" id="IdPropietario" name="IdPropietario" required="Requerido">
		<br>
		
		
		<input class="enviar" type="submit">
	</form>

</html>


<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>