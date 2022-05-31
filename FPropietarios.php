<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
?>

<html>
	<form method="post" action="IPropietarios.php">
		<label> Propietarios </label>
		<p>
		<label> IdPropietario</label>
		<input type="number" id="IdPropietario" name="IdPropietario" required="Requerido">
		<br>
		<label> Localidad </label>
		<input type="text" id="Localidad" name="Localidad" required="Requerido">
		<br>
		<label> Municipio </label>
		<input type="text" id="Municipio" name="Municipio" required="Requerido">
		<br>
		<label> Nombre </label>
		<input type="text" id="Nombre" name="Nombre" required="Requerido">
		<br>
		<label> RFC </label>
		<input type="text" id="RFC" name="RFC" required="Requerido">
		<br>
		
		
		<input type="submit">
	</form>

</html>


<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>
