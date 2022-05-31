<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
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
		<label class="titulo"> Conductores </label>
        <img id="logo_gob2" src="imagenes\FInicio_Sesion\logo2 gob.jpeg" alt="">
    </div>

	<form method="post" action="IConductores.php" enctype="multipart/form-data">
		<p>
		<label> Id </label>
		<input type="number" id="Id" name="Id" required="Requerido">
		<br>
		<label> Domicilio </label>
		<input type="text" id="Domicilio" name="Domicilio" required="Requerido">
		<br>
		<label> GrupoSanguineo </label>
		<select name="GrupoSanguineo" id="GrupoSanguineo" required="Requerido">
			<option value="A+">A+</option>
			<option value="B+">B+</option>
			<option value="AB+">AB+</option>
			<option value="O+">O+</option>
			<option value="A-">A-</option>
			<option value="B-">B-</option>
			<option value="AB-">AB-</option>
			<option value="O-">O-</option>
		</select>
		<br>
		<label> Nombre </label>
		<input type="text" id="Nombre" name="Nombre" required="Requerido">
		<br>
		<label> FechaNacimiento </label>
		<input type="date" id="FechaNacimiento" name="FechaNacimiento" required="Requerido">
		<br>
		<label> Firma </label>
		<input type="file" id="Firma" name="Firma" required="Requerido" accept=".jpg">
		<br>
		<label> Foto </label>
		<input type="file" id="Foto" name="Foto" required="Requerido" accept=".jpg">
		<br>
		<label> Donador </label>
		<select name="Donador" id="Donador" required="Requerido" >
			<option value="0">No</option>
			<option value="1">Si</option>
		</select>
		<br>
		<label> Antiguedad </label>
		<input type="number" id="Antiguedad" name="Antiguedad">
		<br>
		
		<input type="submit">
	</form>

</html>


<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>


