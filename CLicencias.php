<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
?>
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
		<label class="titulo"> Consultar Licencias </label>
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
    <input type="radio" name="Atributo" id="Atributo" value="Numero" checked= "true" >Numero
    <input type="radio" name="Atributo" id="Atributo" value="Tipo">Tipo
    <input type="radio" name="Atributo" id="Atributo" value="FechaExp">FechaExp
    <input type="radio" name="Atributo" id="Atributo" value="FechaVencimiento">FechaVencimiento
    <input type="radio" name="Atributo" id="Atributo" value="Restriccion">Restriccion
    <input type="radio" name="Atributo" id="Atributo" value="IdConductor">IdConductor
    <br>
    <input class="enviar" type="submit">



</form>
<?php
    if(isset($_GET['Valor'])){
        $Valor = $_GET['Valor'];
        $Atributo = $_GET['Atributo'];
        include("Conexion.php");
        $Con=Conectar();
        $SQL="SELECT * FROM Licencias WHERE $Atributo Like '%$Valor%';";
        $Result=Ejecutar($Con,$SQL);
    
    
        //iniciar tabla
        print("<table border=1> <tr> <th>Numero</th> <th>Tipo</th> <th>FechaExp</th> <th>FechaVencimiento</th> <th>Restricción</th> <th>IdConductor</th> <th>Actualizar</th> <th>Eliminar</th></tr>");
        //print("Numero---Tipo---FechaExp---FechaVencimiento---Restricción---IdConductor"."<br>");
        for($f=0; $f<mysqli_num_rows($Result);$f++){
            $Fila=mysqli_fetch_row($Result); //Vector o arreglo de 1 dimensión
            print("<tr> <td>".$Fila[0]."</td> <td>".$Fila[1]."</td> <td>".$Fila[2]."</td> <td>".$Fila[3]."</td> <td>".$Fila[4]."</td> <td>".$Fila[5]."</td> <td> <a href=ULicencias.php?Numero=".$Fila[0].">Actualiza </a> </td> <td> <a href=DLicencias.php?Numero=".$Fila[0].">Elimina </a> </td> </tr>");
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