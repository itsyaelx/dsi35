<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
?>

<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Propietarios</title>
        <link rel="stylesheet" href="styles\styles.css">
    </head>

	<div id="contenedor_logos">
        <div id="contenedor_logo_gob">
            <img id="logo_gob" src="imagenes\FInicio_Sesion\logo gob queretaro.jpeg" alt="">
        </div>
		<label class="titulo"> Propietarios </label>
		<div>
                <a href="MenuA.php">Menu</a>
            </div>
        <img id="logo_gob2" src="imagenes\FInicio_Sesion\logo2 gob.jpeg" alt="">
    </div>

	<form class="formulario" method="post" action="IPropietarios.php">
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
		
		
		<input class="enviar" type="submit">
	</form>

</html>


<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>
