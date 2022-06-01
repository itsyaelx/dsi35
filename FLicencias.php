<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
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
		<label class="titulo"> Licencias </label>
        <a href="MenuA.php">Menu</a>
        <img id="logo_gob2" src="imagenes\FInicio_Sesion\logo2 gob.jpeg" alt="">
    </div>

	<form class="formulario" method="get" action="ILicencias.php"> <!--Action indica qué archivo ejecutar después de mandar el formulario -->
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
		<label> Vigencia </label>
		<select type="text" name="Vigencia" id="Vigencia">
            <option value="3">3</option>
            <option value="5">5</option>
        </select>
		<label> Restriccion </label>
		<input type="text" id="Restriccion" name="Restriccion" >
		<br>
		<label> IdConductor </label>
		<input type="number" id="IdConductor" name="IdConductor" required="Requerido" >
		<br>
		
		<input class="enviar" type="submit">
	</form>

</html>

<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>