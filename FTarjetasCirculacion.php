<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
?>

<html>
	<form method="get" action="ITarjetasCirculacion.php">
		<label> TarjetasCirculacion </label>
		<p>
		<label> FolioTarjeta </label>
		<input type="number" id="FolioTarjeta" name="FolioTarjeta" required="Requerido">
		<br>
		<label> Uso</label>
		<input type="text" id="Uso" name="Uso" required="Requerido">
		<br>
		<label> Operacion</label>
		<input type="text" id="Operacion" name="Operacion" required="Requerido">
		<br>
		<label> OficionaExpedidora</label>
		<input type="text" id="OficionaExpedidora" name="OficionaExpedidora" required="Requerido">
		<br>
		<label> NCI</label>
		<input type="text" id="NCI" name="NCI" required="Requerido">
		<br>
		<label> FechaExpedicion</label>
		<input type="date" id=" FechaExpedicion" name=" FechaExpedicion" required="Requerido">
		<br>
		<label> IdVehiculo</label>
		<input type="number" id="IdVehiculo" name="IdVehiculo" required="Requerido">
		<br>
		<label> IdPropietario</label>
		<input type="number" id="IdPropietario" name="IdPropietario" required="Requerido">
		<br>
		
		
		<input type="submit">
	</form>

</html>


<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>