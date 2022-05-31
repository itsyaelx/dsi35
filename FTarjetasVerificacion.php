<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
?>

<html>
	<form method="post" action="ITarjetasVerificacion.php">
		<label> TarjetasVerificacion </label>
		<p>
		<label> FolioCertificado</label>
		<input type="number" id="FolioCertificado" name="FolioCertificado" required="Requerido">
		<br>
		<label> TipoServicio</label>
		<input type="text" id="TipoServicio" name="TipoServicio" required="Requerido">
		<br>
		<label> HoraEntrada</label>
		<input type="time" id="HoraEntrada" name="HoraEntrada" required="Requerido">
		<br>
		<label> HoraSalida</label>
		<input type="time" id="HoraSalida" name="HoraSalida" required="Requerido">
		<br>
		<label> TipoCarroceria</label>
		<input type="text" id="TipoCarroceria" name="TipoCarroceria" required="Requerido">
		<br>
		<label> Entidad</label>
		<input type="text" id="Entidad" name="Entidad" required="Requerido">
		<br>
		<label> Municipio</label>
		<input type="text" id="Municipio" name="Municipio" required="Requerido">
		<br>
		<label> NumCentro</label>
		<input type="number" id="NumCentro" name="NumCentro" required="Requerido">
		<br>
		<label> NumLinea</label>
		<input type="number" id="NumLinea" name="NumLinea" required="Requerido">
		<br>
		<label> Tecnico</label>
		<input type="text" id="Tecnico" name="Tecnico" required="Requerido">
		<br>
		<label> FechaExpedicion</label>
		<input type="date" id="FechaExpedicion" name="FechaExpedicion" required="Requerido">
		<br>
		<label> Motivo</label>
		<input type="text" id="Motivo" name="Motivo" required="Requerido">
		<br>
		<label> Semestre</label>
		<select name="Semestre" id="Semestre" required="Requerido">
			<option value=1>1</option>
			<option value=2>2</option>
		</select>
		<br>
		<label> Vigencia</label>
		<input type="date" id="Vigencia" name="Vigencia" required="Requerido">
		<br>
		<label> IdVehiculo </label>
		<input type="number" id="IdVehiculo" name="IdVehiculo" required="Requerido">
		<br>

		
		<input type="submit">
	</form>

</html>


<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>
