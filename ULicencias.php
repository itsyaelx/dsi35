<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
?>


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
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Licencias</title>
        <link rel="stylesheet" href="styles\styles.css">
    </head>

	<div id="contenedor_logos">
        <div id="contenedor_logo_gob">
            <img id="logo_gob" src="imagenes\FInicio_Sesion\logo gob queretaro.jpeg" alt="">
        </div>
		<label class="titulo"> Actualizar Licencias </label>
		<div>
                <a href="MenuA.php">Menu</a>
            </div>
        <img id="logo_gob2" src="imagenes\FInicio_Sesion\logo2 gob.jpeg" alt="">
    </div>
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
		
		<input class="enviar" type="submit">
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
		print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=CLicencias.php">');
	}

?>

<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>