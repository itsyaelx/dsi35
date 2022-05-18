<?php
	$Id = $_REQUEST['Id'];
	include ("Conexion.php");
	$Con = Conectar();
	$SQL="SELECT * FROM Licencias WHERE Id = '$Id'";
	$Result=Ejecutar($Con,$SQL);
	$Fila = mysqli_fetch_row($Result);
	Desconectar($Con);
?>

<html>
	<head>
		<link rel="stylesheet" href="Styles/Style.css">
	</head>
	<form method="post" action="IConductores.php">
		<label> Conductores </label>
		<p>
		<label> Id </label>
		<input type="number" id="Id" name="Id" required="Requerido" value = "<?php print($Fila[0]); ?>">
		<br>
		<label> Domicilio </label>
		<input type="text" id="Domicilio" name="Domicilio" required="Requerido" value = "<?php print($Fila[1]); ?>">
		<br>
		<label> GrupoSanguineo </label>
		<input type="text" name="GrupoSanguineo" id="GrupoSanguineo" required="Requerido" value = "<?php print($Fila[2]); ?>">

		<br>
		<label> Nombre </label>
		<input type="text" id="Nombre" name="Nombre" required="Requerido" value = "<?php print($Fila[3]); ?>">
		<br>
		<label> FechaNacimiento </label>
		<input type="date" id="FechaNacimiento" name="FechaNacimiento" required="Requerido" value = "<?php print($Fila[4]); ?>">
		<br>
		<label> Firma </label>
		<input type="text" id="Firma" name="Firma" required="Requerido" value = "<?php print($Fila[5]); ?>">
		<br>
		<label> Foto </label>
		<input type="text" id="Foto" name="Foto" required="Requerido" value = "<?php print($Fila[6]); ?>">
		<br>
		<label> Donador </label>
		<input type="text" name="Donador" id="Donador" required="Requerido" value = "<?php print($Fila[7]); ?>">
		<br>
		<label> Antiguedad </label>
		<input type="number" id="Antiguedad" name="Antiguedad" value = "<?php print($Fila[8]); ?>">
		<br>
		
		<input type="submit">
	</form>

</html>

