<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
?>


<html>
	<form method="get" action="IVehiculos.php">
		<label> Vehiculos </label>
		<p>
		<label> IdVehiculo</label>
		<input type="number" id="IdVehiculo" name="IdVehiculo" required="Requerido">
		<br>
		<label> Origen</label>
		<input type="text" id="Origen" name="Origen" required="Requerido">
		<br>
		<label> Color</label>
		<input type="text" id="Color" name="Color" required="Requerido">
		<br>
		<label> Cilindraje</label>
		<input type="number" id="Cilindraje" name="Cilindraje" required="Requerido">
		<br>
		<label> Capacidad</label>
		<input type="number" id="Capacidad" name="Capacidad" required="Requerido">
		<br>
		<label> Puertas</label>
		<input type="number" id="Puertas" name="Puertas" required="Requerido">
		<br>
		<label> Asientos</label>
		<input type="number" id="Asientos" name="Asientos" required="Requerido">
		<br>
		<label> CodigoVehicular</label>
		<input type="text" id="CodigoVehicular" name="CodigoVehicular" required="Requerido">
		<br>
		<label> Combustible</label>
		<input type="number" id="Combustible" name="Combustible" required="Requerido">
		<br>
		<label> Linea</label>
		<input type="number" id="Linea" name="Linea" required="Requerido">
		<br>
		<label> Transmision</label>
		<select name="Transmision" id="Transmision" required="Requerido">
			<option value="Automatico">Automatico</option>
			<option value="Estandar">Estandar</option>
		</select>
		<br>
		<label> Clase</label>
		<input type="number" id="Clase" name="Clase" required="Requerido">
		<br>
		<label> Tipo</label>
		<input type="number" id="Tipo" name="Tipo" required="Requerido">
		<br>
		<label> RFA</label>
		<input type="text" id="RFA" name="RFA" required="Requerido">
		<br>
		<label> Modelo</label>
		<input type="text" id="Modelo" name="Modelo" required="Requerido">
		<br>
		<label> NumMotor</label>
		<input type="text" id="NumMotor" name="NumMotor" required="Requerido">
		<br>
		<label> Placa</label>
		<input type="text" id="Placa" name="Placa" required="Requerido">
		<br>
		<label> NumSerie</label>
		<input type="text" id="NumSerie" name="NumSerie" required="Requerido">
		<br>
		<label> Marca</label>
		<input type="text" id="Marca" name="Marca" required="Requerido">
		<br>
		<label> SubMarca</label>
		<input type="text" id="SubMarca" name="SubMarca" required="Requerido">
		<br>

		
		<input type="submit">
	</form>

</html>


<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>