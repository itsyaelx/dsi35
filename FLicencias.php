<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
?>

<html>
	<form method="get" action="ILicencias.php"> <!--Action indica qué archivo ejecutar después de mandar el formulario -->
		<label> Licencias </label>
		<p>
		<label> Numero </label>
		<input type="number" id="Numero" name="Numero" required="Requerido">
		<br>
		<label> Tipo </label>
		<select type="text" name="Tipo" id="Tipo">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
		<br>
		<label> FechaExp </label>
		<input type="date" id="FechaExp" name="FechaExp" required="Requerido" >
		<br>
		<label> FechaVencimiento </label>
		<input type="date" id="FechaVencimiento" name="FechaVencimiento" required="Requerido" >
		<br>
		<label> Restriccion </label>
		<input type="text" id="Restriccion" name="Restriccion" >
		<br>
		<label> IdConductor </label>
		<input type="number" id="IdConductor" name="IdConductor" required="Requerido" >
		<br>
		
		<input type="submit">
	</form>

</html>

<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>