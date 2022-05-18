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
    <input type="submit">



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
        print("<table border=1> <tr> <th>Numero</th> <th>Tipo</th> <th>FechaExp</th> <th>FechaVencimiento</th> <th>Restricción</th> <th>IdConductor</th></tr>");
        //print("Numero---Tipo---FechaExp---FechaVencimiento---Restricción---IdConductor"."<br>");
        for($f=0; $f<mysqli_num_rows($Result);$f++){
            $Fila=mysqli_fetch_row($Result); //Vector o arreglo de 1 dimensión
            print("<tr> <td>".$Fila[0]."</td> <td>".$Fila[1]."</td> <td>".$Fila[2]."</td> <td>".$Fila[3]."</td> <td>".$Fila[4]."</td> <td>".$Fila[5]."</td> </tr>");
        }
        //finalizar tabla
        print("</table>");
    
        Desconectar($Con);
    }

?>