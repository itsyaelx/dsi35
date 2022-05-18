<form method="get">
    <label> Valor </label> 
    <input type="text" name="Valor" id="Valor" required="true">
    <br>
    <label> Atributo </label> 
    <input type="radio" name="Atributo" id="Atributo" value="IdVehiculo" checked= "true" >IdVehiculo
    <input type="radio" name="Atributo" id="Atributo" value="Origen">Origen
    <input type="radio" name="Atributo" id="Atributo" value="Color">Color
    <input type="radio" name="Atributo" id="Atributo" value="Cilindraje">Cilindraje
    <input type="radio" name="Atributo" id="Atributo" value="Capacidad">Capacidad
    <input type="radio" name="Atributo" id="Atributo" value="Puertas">Puertas
    <input type="radio" name="Atributo" id="Atributo" value="Asientos">Asientos
    <input type="radio" name="Atributo" id="Atributo" value="CodigoVehicular">CodigoVehicular
    <input type="radio" name="Atributo" id="Atributo" value="Combustible">Combustible
    <input type="radio" name="Atributo" id="Atributo" value="Linea">Linea
    <input type="radio" name="Atributo" id="Atributo" value="Transmision">Transmision
    <input type="radio" name="Atributo" id="Atributo" value="Clase">Clase
    <input type="radio" name="Atributo" id="Atributo" value="Tipo">Tipo
    <input type="radio" name="Atributo" id="Atributo" value="RFA">RFA
    <input type="radio" name="Atributo" id="Atributo" value="Modelo">Modelo
    <input type="radio" name="Atributo" id="Atributo" value="NumMotor">NumMotor
    <input type="radio" name="Atributo" id="Atributo" value="Placa">Placa
    <input type="radio" name="Atributo" id="Atributo" value="NumSerie">NumSerie
    <input type="radio" name="Atributo" id="Atributo" value="Marca">Marca
    <input type="radio" name="Atributo" id="Atributo" value="SubMarca">SubMarca
    <br>
    <input type="submit">



</form>
<?php
    if(isset($_GET['Valor'])){
        $Valor = $_GET['Valor'];
        $Atributo = $_GET['Atributo'];
        include("Conexion.php");
        $Con=Conectar();
        $SQL="SELECT * FROM Vehiculos WHERE $Atributo Like '%$Valor%';";
        $Result=Ejecutar($Con,$SQL);
    
    
        //iniciar tabla
        print("<table border=1> <tr>
        <th>IdVehiculo</th>
        <th>Origen</th>
        <th>Color</th>
        <th>Cilindraje</th>
            <th>Capacidad</th>
            <th>Puertas</th>
            <th>Asientos</th>
            <th>CodigoVehicular</th>
                <th>Combustible</th>
                <th>Linea</th>
                <th>Transmision</th>
                <th>Clase</th>
                <th>Tipo</th>
                <th>RFA</th>
                <th>Modelo</th>
                <th>NumMotor</th>
                <th>Placa</th>
                <th>NumSerie</th>
                <th>Marca</th>
                <th>SubMarca</th>
                </tr>");
        for($f=0; $f<mysqli_num_rows($Result);$f++){
            $Fila=mysqli_fetch_row($Result); //Vector o arreglo de 1 dimensión
            print("<tr> <td>".$Fila[0]."</td> <td>".$Fila[1]."</td> <td>".$Fila[2]."</td> <td>".$Fila[3]."</td> <td>".$Fila[4]."</td> <td>".$Fila[5]."</td> <td>".$Fila[6]."</td> <td>".$Fila[7]."</td> <td>".$Fila[8]."</td> <td>".$Fila[9]."</td> <td>".$Fila[10]."</td> <td>".$Fila[11]."</td> <td>".$Fila[12]."</td> <td>".$Fila[13]."</td> <td>".$Fila[14]."</td> <td>".$Fila[15]."</td> <td>".$Fila[16]."</td> <td>".$Fila[17]."</td> <td>".$Fila[18]."</td> <td>".$Fila[19]."</td> </tr>");
        }
        //finalizar tabla
        print("</table>");

        Desconectar($Con);
    }

?>