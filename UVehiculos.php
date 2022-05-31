<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
?>


<?php
	$IdVehiculo = $_REQUEST['IdVehiculo'];
	include ("Conexion.php");
	$Con = Conectar();
	$SQL="SELECT * FROM Vehiculos WHERE IdVehiculo = '$IdVehiculo'";
	$Result=Ejecutar($Con,$SQL);
	$Fila = mysqli_fetch_row($Result);
	Desconectar($Con);
?>

<html>

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vehiculos</title>
        <link rel="stylesheet" href="styles\styles.css">
    </head>

	<div id="contenedor_logos">
        <div id="contenedor_logo_gob">
            <img id="logo_gob" src="imagenes\FInicio_Sesion\logo gob queretaro.jpeg" alt="">
        </div>
		<label class="titulo"> Actualizar Vehiculos </label>
		<div>
                <a href="MenuA.php">Menu</a>
            </div>
        <img id="logo_gob2" src="imagenes\FInicio_Sesion\logo2 gob.jpeg" alt="">
    </div>

	<form method="get" action="UVehiculos.php">
		<label> Vehiculos </label>
		<p>
		<label> IdVehiculo</label>
		<input type="number" id="IdVehiculo" name="IdVehiculo" required="Requerido"   value = "<?php print($Fila[0]); ?>">
		<br>
		<label> Origen</label>
		<input type="text" id="Origen" name="Origen" required="Requerido"  value = "<?php print($Fila[1]); ?>">
		<br>
		<label> Color</label>
		<input type="text" id="Color" name="Color" required="Requerido"  value = "<?php print($Fila[2]); ?>">
		<br>
		<label> Cilindraje</label>
		<input type="number" id="Cilindraje" name="Cilindraje" required="Requerido"  value = "<?php print($Fila[3]); ?>">
		<br>
		<label> Capacidad</label>
		<input type="number" id="Capacidad" name="Capacidad" required="Requerido"  value = "<?php print($Fila[4]); ?>">
		<br>
		<label> Puertas</label>
		<input type="number" id="Puertas" name="Puertas" required="Requerido"  value = "<?php print($Fila[5]); ?>">
		<br>
		<label> Asientos</label>
		<input type="number" id="Asientos" name="Asientos" required="Requerido"  value = "<?php print($Fila[6]); ?>">
		<br>
		<label> CodigoVehicular</label>
		<input type="text" id="CodigoVehicular" name="CodigoVehicular" required="Requerido"  value = "<?php print($Fila[7]); ?>">
		<br>
		<label> Combustible</label>
		<input type="number" id="Combustible" name="Combustible" required="Requerido"  value = "<?php print($Fila[8]); ?>">
		<br>
		<label> Linea</label>
		<input type="number" id="Linea" name="Linea" required="Requerido"  value = "<?php print($Fila[9]); ?>">
		<br>
		<label> Transmision</label>
		<input type="text" name="Transmision" id="Transmision" required="Requerido"  value = "<?php print($Fila[10]); ?>">
		<br>
		<label> Clase</label>
		<input type="number" id="Clase" name="Clase" required="Requerido"  value = "<?php print($Fila[11]); ?>">
		<br>
		<label> Tipo</label>
		<input type="number" id="Tipo" name="Tipo" required="Requerido"  value = "<?php print($Fila[12]); ?>">
		<br>
		<label> RFA</label>
		<input type="text" id="RFA" name="RFA" required="Requerido"  value = "<?php print($Fila[13]); ?>">
		<br>
		<label> Modelo</label>
		<input type="text" id="Modelo" name="Modelo" required="Requerido"  value = "<?php print($Fila[14]); ?>">
		<br>
		<label> NumMotor</label>
		<input type="text" id="NumMotor" name="NumMotor" required="Requerido"  value = "<?php print($Fila[15]); ?>">
		<br>
		<label> Placa</label>
		<input type="text" id="Placa" name="Placa" required="Requerido"  value = "<?php print($Fila[16]); ?>">
		<br>
		<label> NumSerie</label>
		<input type="text" id="NumSerie" name="NumSerie" required="Requerido"  value = "<?php print($Fila[17]); ?>">
		<br>
		<label> Marca</label>
		<input type="text" id="Marca" name="Marca" required="Requerido"  value = "<?php print($Fila[18]); ?>">
		<br>
		<label> SubMarca</label>
		<input type="text" id="SubMarca" name="SubMarca" required="Requerido"  value = "<?php print($Fila[19]); ?>">
		<br>

		
		<input class="enviar" type="submit">
	</form>

</html>

<?php
	if(isset($_GET["Origen"])) {
        $IdVehiculo=$_REQUEST['IdVehiculo']; 
        $Origen=$_REQUEST['Origen'];
        $Color=$_REQUEST['Color'];
        $Cilindraje=$_REQUEST['Cilindraje'];
        $Capacidad=$_REQUEST['Capacidad'];
        $Puertas=$_REQUEST['Puertas'];
        $Asientos=$_REQUEST['Asientos'];
        $CodigoVehicular=$_REQUEST['CodigoVehicular'];
        $Combustible=$_REQUEST['Combustible'];
        $Linea=$_REQUEST['Linea']; 
        $Transmision=$_REQUEST['Transmision'];
        $Clase=$_REQUEST['Clase'];
        $Tipo=$_REQUEST['Tipo'];
        $RFA=$_REQUEST['RFA'];
        $Modelo=$_REQUEST['Modelo'];
        $NumMotor=$_REQUEST['NumMotor'];
        $Placa=$_REQUEST['Placa'];
        $NumSerie=$_REQUEST['NumSerie'];
        $Marca=$_REQUEST['Marca']; 
        $SubMarca=$_REQUEST['SubMarca'];

		$Con = Conectar();
		$SQL="UPDATE Vehiculos SET IdVehiculo='$IdVehiculo', Origen='$Origen', 
        Color='$Color', Cilindraje='$Cilindraje',
		Capacidad='$Capacidad', Puertas='$Puertas', Asientos='$Asientos', CodigoVehicular='$CodigoVehicular',
        Combustible='$Combustible', Linea='$Linea', Transmision='$Transmision',Clase='$Clase', Tipo='$Tipo',
        RFA='$RFA', Modelo='$Modelo', NumMotor='$NumMotor', Placa='$Placa', NumSerie='$NumSerie', Marca='$Marca',
        SubMarca='$SubMarca' WHERE IdVehiculo='$IdVehiculo' ";
		$Result=Ejecutar($Con,$SQL);
		print("Registros Actualizados= ". mysqli_affected_rows($Con));
		Desconectar($Con);
		print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=CVehiculos.php">');
	}

?>


<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>