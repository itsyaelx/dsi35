<?php
	$FolioCertificado = $_REQUEST['FolioCertificado'];
	include ("Conexion.php");
	$Con = Conectar();
	$SQL="SELECT * FROM TarjetasVerificacion WHERE FolioCertificado = '$FolioCertificado'";
	$Result=Ejecutar($Con,$SQL);
	$Fila = mysqli_fetch_row($Result);
	Desconectar($Con);
?>

<html>
	<form method="post" action="UTarjetasVerificacion.php">
		<label> TarjetasVerificacion </label>
		<p>
		<label> FolioCertificado</label>
		<input type="number" id="FolioCertificado" name="FolioCertificado" required="Requerido"  value = "<?php print($Fila[0]); ?>">
		<br>
		<label> TipoServicio</label>
		<input type="text" id="TipoServicio" name="TipoServicio" required="Requerido"  value = "<?php print($Fila[1]); ?>">
		<br>
		<label> HoraEntrada</label>
		<input type="time" id="HoraEntrada" name="HoraEntrada" required="Requerido"  value = "<?php print($Fila[2]); ?>">
		<br>
		<label> HoraSalida</label>
		<input type="time" id="HoraSalida" name="HoraSalida" required="Requerido"  value = "<?php print($Fila[3]); ?>">
		<br>
		<label> TipoCarroceria</label>
		<input type="text" id="TipoCarroceria" name="TipoCarroceria" required="Requerido" value = "<?php print($Fila[4]); ?>">
		<br>
		<label> Entidad</label>
		<input type="text" id="Entidad" name="Entidad" required="Requerido" value = "<?php print($Fila[5]); ?>">
		<br>
		<label> Municipio</label>
		<input type="text" id="Municipio" name="Municipio" required="Requerido" value = "<?php print($Fila[6]); ?>">
		<br>
		<label> NumCentro</label>
		<input type="number" id="NumCentro" name="NumCentro" required="Requerido" value = "<?php print($Fila[7]); ?>">
		<br>
		<label> NumLinea</label>
		<input type="number" id="NumLinea" name="NumLinea" required="Requerido" value = "<?php print($Fila[8]); ?>">
		<br>
		<label> Tecnico</label>
		<input type="text" id="Tecnico" name="Tecnico" required="Requerido" value = "<?php print($Fila[9]); ?>">
		<br>
		<label> FechaExpedicion</label>
		<input type="date" id="FechaExpedicion" name="FechaExpedicion" required="Requerido" value = "<?php print($Fila[10]); ?>">
		<br>
		<label> Motivo</label>
		<input type="text" id="Motivo" name="Motivo" required="Requerido" value = "<?php print($Fila[11]); ?>">
		<br>
		<label> Semestre</label>
		<input type="text" name="Semestre" id="Semestre" required="Requerido" value = "<?php print($Fila[12]); ?>">
		<br>
		<label> Vigencia</label>
		<input type="date" id="Vigencia" name="Vigencia" required="Requerido" value = "<?php print($Fila[13]); ?>">
		<br>
		<label> IdVehiculo </label>
		<input type="number" id="IdVehiculo" name="IdVehiculo" required="Requerido" value = "<?php print($Fila[14]); ?>">
		<br>

		
		<input type="submit">
	</form>

</html>

<?php
	if(isset($_POST["TipoServicio"])) {
        $FolioCertificado=$_REQUEST['FolioCertificado']; 
        $TipoServicio=$_REQUEST['TipoServicio'];
        $HoraEntrada=$_REQUEST['HoraEntrada'];
        $HoraSalida=$_REQUEST['HoraSalida'];
        $TipoCarroceria=$_REQUEST['TipoCarroceria'];
        $Entidad=$_REQUEST['Entidad'];
        $Municipio=$_REQUEST['Municipio'];
        $NumCentro=$_REQUEST['NumCentro'];
        $NumLinea=$_REQUEST['NumLinea'];
        $Tecnico=$_REQUEST['Tecnico'];
        $FechaExpedicion=$_REQUEST['FechaExpedicion']; 
        $Motivo=$_REQUEST['Motivo'];
        $Semestre=$_REQUEST['Semestre'];
        $Vigencia=$_REQUEST['Vigencia'];
        $IdVehiculo=$_REQUEST['IdVehiculo'];

		$Con = Conectar();
		$SQL="UPDATE TarjetasVerificacion SET FolioCertificado='$FolioCertificado', TipoServicio='$TipoServicio', 
        HoraEntrada='$HoraEntrada', HoraSalida='$HoraSalida',
		TipoCarroceria='$TipoCarroceria', Entidad='$Entidad', Municipio='$Municipio', NumCentro='$NumCentro',
        NumLinea='$NumLinea', Tecnico='$Tecnico', FechaExpedicion='$FechaExpedicion',Motivo='$Motivo', Semestre='$Semestre',
        Vigencia='$Vigencia', IdVehiculo='$IdVehiculo' WHERE FolioCertificado='$FolioCertificado' ";
		$Result=Ejecutar($Con,$SQL);
		print("Registros Actualizados= ". mysqli_affected_rows($Con));
		Desconectar($Con);
	}

?>