<?php
	$Numero = $_REQUEST['Numero'];
	include ("Conexion.php");
	$Con = Conectar();
	$SQL="SELECT * FROM Licencias WHERE Numero = '$Numero'";
	$Result=Ejecutar($Con,$SQL);
	$Fila = mysqli_fetch_row($Result);
	Desconectar($Con);
?>



<html>
	<form method="get" action="ULicencias.php"> <!--Action indica qué archivo ejecutar después de mandar el formulario -->
		<label> Licencias </label>
		<p>
		<label> Numero </label>
		<input type="number" id="Numero" name="Numero" required="Requerido" value = "<?php print($Fila[0]); ?>" >
		<br>
		<label> Tipo </label>
		<input type="text" name="Tipo" id="Tipo" value = "<?php print($Fila[1]); ?>">
		<br>
		<label> FechaExp </label>
		<input type="date" id="FechaExp" name="FechaExp" required="Requerido" value = "<?php print($Fila[2]); ?>">
		<br>
		<label> FechaVencimiento </label>
		<input type="date" id="FechaVencimiento" name="FechaVencimiento" required="Requerido" value = "<?php print($Fila[3]); ?>">
		<br>
		<label> Restriccion </label>
		<input type="text" id="Restriccion" name="Restriccion" value = "<?php print($Fila[4]); ?>">
		<br>
		<label> IdConductor </label>
		<input type="number" id="IdConductor" name="IdConductor" required="Requerido" value = "<?php print($Fila[5]); ?>">
		<br>
		
		<input type="submit">
	</form>

</html>

<?php
	if(isset($_GET["Tipo"])) {
		$Tipo=$_GET['Tipo'];
		$FechaExp=$_GET['FechaExp'];
		$FechaVencimiento=$_GET['FechaVencimiento'];
		$Restriccion=$_GET['Restriccion'];
		$IdConductor=$_GET['IdConductor'];

		$Con = Conectar();
		$SQL="UPDATE Licencias SET Tipo='$Tipo', FechaExp='$FechaExp', FechaVencimiento='$FechaVencimiento', Restriccion='$Restriccion',
		IdConductor='$IdConductor' WHERE Numero='$Numero' ";
		$Result=Ejecutar($Con,$SQL);
		print("Registros Actualizados= ". mysqli_affected_rows($Con));
		Desconectar($Con);
	}

?>