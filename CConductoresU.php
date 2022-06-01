<?php
    session_start();
    if(isset($_SESSION['Usuario123'])) {

    
?>

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
		<label class="titulo"> Consultar Conductores </label>
                <a href="MenuU.php">Menu</a>
        <img id="logo_gob2" src="imagenes\FInicio_Sesion\logo2 gob.jpeg" alt="">
    </div>

<form method="get">
    <label> Valor </label> 
    <input type="text" name="Valor" id="Valor" required="true">
    <br>
    <label> Atributo </label> 
    <input type="radio" name="Atributo" id="Atributo" value="Id" checked= "true" >Id
    <input type="radio" name="Atributo" id="Atributo" value="Domicilio">Domicilio
    <input type="radio" name="Atributo" id="Atributo" value="GrupoSanguineo">GrupoSanguineo
    <input type="radio" name="Atributo" id="Atributo" value="Nombre">Nombre
    <input type="radio" name="Atributo" id="Atributo" value="FechaNacimiento">FechaNacimiento
    <input type="radio" name="Atributo" id="Atributo" value="Firma">Firma
    <input type="radio" name="Atributo" id="Atributo" value="Foto">Foto
    <input type="radio" name="Atributo" id="Atributo" value="Donador">Donador
    <input type="radio" name="Atributo" id="Atributo" value="Antiguedad">Antiguedad
    <br>
    <input class="enviar" type="submit">



</form>
<?php
    if(isset($_GET['Valor'])){
        $Valor = $_GET['Valor'];
        $Atributo = $_GET['Atributo'];
        include("Conexion.php");
        $Con=Conectar();
        $SQL="SELECT * FROM Conductores WHERE $Atributo Like '%$Valor%';";
        $Result=Ejecutar($Con,$SQL);
    
    
        print("<table border=1> <tr> <th>Id</th> <th>Domicilio</th> <th>GrupoSanguineo</th> <th>Nombre</th> <th>FechaNacimiento</th> <th>Firma</th> <th>Foto</th> <th>Donador</th> <th>Antiguedad</th> </tr>");
        //print("Numero---Tipo---FechaExp---FechaVencimiento---Restricción---IdConductor"."<br>");
        for($f=0; $f<mysqli_num_rows($Result);$f++){
            $Fila=mysqli_fetch_row($Result); //Vector o arreglo de 1 dimensión
            print("<tr> <td>".$Fila[0]."</td> <td>".$Fila[1]."</td> <td>".$Fila[2]."</td> <td>".$Fila[3]."</td> <td>".$Fila[4]."</td> <td>".$Fila[5]."</td> <td>".$Fila[6]."</td> <td>".$Fila[7]."</td> <td>".$Fila[8]."</td> </tr>");
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