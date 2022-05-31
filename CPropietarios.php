<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
?>

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
		<label class="titulo"> Consultar Propietarios </label>
        <div>
                <a href="MenuA.php">Menu</a>
            </div>
        <img id="logo_gob2" src="imagenes\FInicio_Sesion\logo2 gob.jpeg" alt="">
    </div>

<form method="get">
    <label> Valor </label> 
    <input type="text" name="Valor" id="Valor" required="true">
    <br>
    <label> Atributo </label> 
    <input type="radio" name="Atributo" id="Atributo" value="IdPropietario" checked= "true" >IdPropietario
    <input type="radio" name="Atributo" id="Atributo" value="Localidad">Localidad
    <input type="radio" name="Atributo" id="Atributo" value="Municipio">Municipio
    <input type="radio" name="Atributo" id="Atributo" value="Nombre">Nombre
    <input type="radio" name="Atributo" id="Atributo" value="RFC">RFC
    <br>
    <input class="enviar" type="submit">



</form>
<?php
    if(isset($_GET['Valor'])){
        $Valor = $_GET['Valor'];
        $Atributo = $_GET['Atributo'];
        include("Conexion.php");
        $Con=Conectar();
        $SQL="SELECT * FROM Propietarios WHERE $Atributo Like '%$Valor%';";
        $Result=Ejecutar($Con,$SQL);
    
    
            //iniciar tabla
        print("<table border=1> <tr>
        <th>IdPropietario</th>
        <th>Localidad</th>
        <th>Municipio</th>
        <th>Nombre</th>
        <th>RFC</th>
                </tr>");
        for($f=0; $f<mysqli_num_rows($Result);$f++){
            $Fila=mysqli_fetch_row($Result); //Vector o arreglo de 1 dimensión
            print("<tr> <td>".$Fila[0]."</td> <td>".$Fila[1]."</td> <td>".$Fila[2]."</td> <td>".$Fila[3]."</td> <td>".$Fila[4]."</td> <td> <a href=UPropietarios.php?IdPropietario=".$Fila[0].">Actualiza </a> </td> <td> <a href=DPropietarios.php?IdPropietario=".$Fila[0].">Elimina </a> </td> </tr>");
        }
        //finalizar tabla
        print("</table>");

        Desconectar($Con);
    }

?>


<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>