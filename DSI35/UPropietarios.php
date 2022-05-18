<?php
	$IdPropietario = $_REQUEST['IdPropietario'];
	include ("Conexion.php");
	$Con = Conectar();
	$SQL="SELECT * FROM Propietarios WHERE IdPropietario = '$IdPropietario'";
	$Result=Ejecutar($Con,$SQL);
	$Fila = mysqli_fetch_row($Result);
	Desconectar($Con);
?>

<html>
	<form method="post" action="UPropietarios.php">
		<label> Propietarios </label>
		<p>
		<label> IdPropietario</label>
		<input type="number" id="IdPropietario" name="IdPropietario" required="Requerido" value="<?php print($Fila[0]); ?>">
		<br>
		<label> Localidad </label>
		<input type="text" id="Localidad" name="Localidad" required="Requerido" value = "<?php print($Fila[1]); ?>">
		<br>
		<label> Municipio </label>
		<input type="text" id="Municipio" name="Municipio" required="Requerido" value = "<?php print($Fila[2]); ?>">
		<br>
		<label> Nombre </label>
		<input type="text" id="Nombre" name="Nombre" required="Requerido" value = "<?php print($Fila[3]); ?>">
		<br>
		<label> RFC </label>
		<input type="text" id="RFC" name="RFC" required="Requerido" value = "<?php print($Fila[4]); ?>">
		<br>
		
		
		<input type="submit">
	</form>

</html>

<?php
	if(isset($_POST["Localidad"])) {
        $IdPropietario=$_POST['IdPropietario']; 
        $Localidad=$_POST['Localidad'];
        $Municipio=$_POST['Municipio'];
        $Nombre=$_POST['Nombre'];
        $RFC=$_POST['RFC'];

		$Con = Conectar();
		$SQL="UPDATE Propietarios SET IdPropietario='$IdPropietario', Localidad='$Localidad', Municipio='$Municipio', Nombre='$Nombre',
		RFC='$RFC' WHERE IdPropietario='$IdPropietario' ";
		$Result=Ejecutar($Con,$SQL);
		print("Registros Actualizados= ". mysqli_affected_rows($Con));
		Desconectar($Con);
	}

?>