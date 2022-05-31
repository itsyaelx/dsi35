<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
?>



<?php
	$Id = $_REQUEST['Id'];
	include ("Conexion.php");
	$Con = Conectar();
	$SQL="SELECT * FROM Conductores WHERE Id = '$Id'";
	$Result=Ejecutar($Con,$SQL);
	$Fila = mysqli_fetch_row($Result);
	Desconectar($Con);
?>

<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conductores</title>
        <link rel="stylesheet" href="styles\styles.css">
    </head>

	<div id="contenedor_logos">
        <div id="contenedor_logo_gob">
            <img id="logo_gob" src="imagenes\FInicio_Sesion\logo gob queretaro.jpeg" alt="">
        </div>
		<label class="titulo"> Actualizar Conductores </label>
		<div>
                <a href="MenuA.php">Menu</a>
            </div>
        <img id="logo_gob2" src="imagenes\FInicio_Sesion\logo2 gob.jpeg" alt="">
    </div>

	<form method="get" action="UConductores.php">
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
		
		<input class="enviar" type="submit">
	</form>

</html>

<?php
	if(isset($_GET["Nombre"])) {
		$Id=$_GET['Id'];
		$Domicilio=$_GET['Domicilio'];
		$GrupoSanguineo=$_GET['GrupoSanguineo'];
		$Nombre=$_GET['Nombre'];
		$FechaNacimiento=$_GET['FechaNacimiento'];
		$Firma=$_GET['Firma'];
		$Foto=$_GET['Foto'];
		$Donador=$_GET['Donador'];
		$Antiguedad=$_GET['Antiguedad'];

		$Con = Conectar();
		$SQL="UPDATE Conductores SET Domicilio='$Domicilio', GrupoSanguineo='$GrupoSanguineo', 
		Nombre='$Nombre', FechaNacimiento='$FechaNacimiento',
		Firma='$Firma', Foto='$Foto', Donador='$Donador', Antiguedad='$Antiguedad' WHERE Id='$Id' ";
		$Result=Ejecutar($Con,$SQL);
		print("Registros Actualizados= ". mysqli_affected_rows($Con));
		Desconectar($Con);
		print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=CConductores.php">');
	}

?>

<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>