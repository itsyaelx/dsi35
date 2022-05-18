<?php
	$Folio = $_REQUEST['Folio'];
	include ("Conexion.php");
	$Con = Conectar();
	$SQL="SELECT * FROM Multas WHERE Folio = '$Folio'";
	$Result=Ejecutar($Con,$SQL);
	$Fila = mysqli_fetch_row($Result);
	Desconectar($Con);
?>

<html>
	<form method="post" action="UMultas.php">
		<label> Multas </label>
		<p>
		<label> Folio </label>
		<input type="number" id="Folio" name="Folio" required="Requerido" value = "<?php print($Fila[0]); ?>">
		<br>
		<label> Agente </label>
		<input type="text" id="Agente" name="Agente" required="Requerido" value = "<?php print($Fila[1]); ?>">
		<br>
		<label> ClaveAgente </label>
		<input type="number" id="ClaveAgente" name="ClaveAgente" required="Requerido" value = "<?php print($Fila[2]); ?>">
		<br>
		<label> Motivo </label>
		<input type="text" id="Motivo" name="Motivo" required="Requerido" value = "<?php print($Fila[3]); ?>">
		<br>
		<label> Fundamento </label>
		<input type="text" id="Fundamento" name="Fundamento" required="Requerido" value = "<?php print($Fila[4]); ?>">
		<br>
		<label> Fecha </label>
		<input type="date" id="Fecha" name="Fecha" required="Requerido" value = "<?php print($Fila[5]); ?>">
		<br>
		<label> Hora </label>
		<input type="time" id="Hora" name="Hora" required="Requerido" value = "<?php print($Fila[6]); ?>">
		<br>
		<label> Lugar </label>
		<input type="text" id="Lugar" name="Lugar" required="Requerido" value = "<?php print($Fila[7]); ?>">
		<br>
		<label> Garantia </label>
		<input type="text" id="Garantia" name="Garantia" required="Requerido" value = "<?php print($Fila[8]); ?>">
		<br>
		<label> Propietario </label>
		<input type="text" id="Propietario" name="Propietario" required="Requerido" value = "<?php print($Fila[9]); ?>">
		<br>
		<label> Entidad </label>
		<input type="text" id="Entidad" name="Entidad" required="Requerido" value = "<?php print($Fila[10]); ?>">
		<br>
		<label> Conductor </label>
		<input type="text" id="Conductor" name="Conductor" value = "<?php print($Fila[11]); ?>">
		<br>
		<label> NumLicencia </label>
		<input type="number" id="NumLicencia" name="NumLicencia" value = "<?php print($Fila[12]); ?>">
		<br>
		<label> FolioTarjeta </label>
		<input type="number" id="FolioTarjeta" name="FolioTarjeta"  value = "<?php print($Fila[13]); ?>">
		<br>
		<label> IdVehiculo </label>
		<input type="number" id="IdVehiculo" name="IdVehiculo" value = "<?php print($Fila[14]); ?>">
		<br>

		
		<input type="submit">
	</form>

</html>

<?php
	if(isset($_POST["Agente"])) {
        $Folio=$_POST['Folio']; 
        $Agente=$_POST['Agente'];
        $ClaveAgente=$_POST['ClaveAgente'];
        $Motivo=$_POST['Motivo'];
        $Fundamento=$_POST['Fundamento'];
        $Fecha=$_POST['Fecha'];
        $Hora=$_POST['Hora'];
        $Lugar=$_POST['Lugar'];
        $Garantia=$_POST['Garantia'];
        $Propietario=$_POST['Propietario']; 
        $Entidad=$_POST['Entidad'];
        $Conductor=$_POST['Conductor'];
        $NumLicencia=$_POST['NumLicencia'];
        $FolioTarjeta=$_POST['FolioTarjeta'];
        $IdVehiculo=$_POST['IdVehiculo'];

		$Con = Conectar();
		$SQL="UPDATE Multas SET Folio='$Folio', Agente='$Agente', ClaveAgente='$ClaveAgente', Motivo='$Motivo',
		Fundamento='$Fundamento', Fecha='$Fecha', Hora='$Hora', Lugar='$Lugar',
        Garantia='$Garantia', Propietario='$Propietario', Entidad='$Entidad',Conductor='$Conductor', NumLicencia='$NumLicencia',
        FolioTarjeta='$FolioTarjeta', IdVehiculo='$IdVehiculo' WHERE Folio='$Folio' ";
		$Result=Ejecutar($Con,$SQL);
		print("Registros Actualizados= ". mysqli_affected_rows($Con));
		Desconectar($Con);
	}

?>