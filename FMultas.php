<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
?>

<html>
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
		<label class="titulo"> Multas </label>
        <img id="logo_gob2" src="imagenes\FInicio_Sesion\logo2 gob.jpeg" alt="">
    </div>

	<form class="formulario" method="post" action="IMultas.php">
		
		<p>
		<label> Folio </label>
		<input type="number" id="Folio" name="Folio" required="Requerido">
		<br>
		<label> Agente </label>
		<input type="text" id="Agente" name="Agente" required="Requerido">
		<br>
		<label> ClaveAgente </label>
		<input type="number" id="ClaveAgente" name="ClaveAgente" required="Requerido">
		<br>
		<label> Motivo </label>
		<input type="text" id="Motivo" name="Motivo" required="Requerido">
		<br>
		<label> Fundamento </label>
		<input type="text" id="Fundamento" name="Fundamento" required="Requerido">
		<br>
		<label> Fecha </label>
		<input type="date" id="Fecha" name="Fecha" required="Requerido">
		<br>
		<label> Hora </label>
		<input type="time" id="Hora" name="Hora" required="Requerido">
		<br>
		<label> Lugar </label>
		<input type="text" id="Lugar" name="Lugar" required="Requerido">
		<br>
		<label> Garantia </label>
		<input type="text" id="Garantia" name="Garantia" required="Requerido">
		<br>
		<label> Propietario </label>
		<input type="text" id="Propietario" name="Propietario" required="Requerido">
		<br>
		<label> Entidad </label>
		<input type="text" id="Entidad" name="Entidad" required="Requerido">
		<br>
		<label> Conductor </label>
		<input type="text" id="Conductor" name="Conductor">
		<br>
		<label> NumLicencia </label>
		<input type="number" id="NumLicencia" name="NumLicencia" value="">
		<br>
		<label> FolioTarjeta </label>
		<input type="number" id="FolioTarjeta" name="FolioTarjeta" value="Null">
		<br>
		<label> IdVehiculo </label>
		<input type="number" id="IdVehiculo" name="IdVehiculo" value="">
		<br>

		
		<input class="enviar" type="submit">
	</form>

</html>


<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>