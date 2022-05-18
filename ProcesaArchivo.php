<?php
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];
    $Tipo = $_POST['Tipo'];
    $Status = $_POST['Status'];
    $TipoA = $_POST['TipoA'];

    switch ($TipoA) {
        case 'txt':
            GeneraTxt($UserName,$Password,$Tipo,$Status);
            break;
            
        case 'csv':
            GeneraCsv($UserName,$Password,$Tipo,$Status);
            break;

        case 'xml':
            GeneraXml($UserName,$Password,$Tipo,$Status);
            break;
    }


    function GeneraTxt($UserName,$Password,$Tipo,$Status) {

        
        //Abrir 
        $Manejador= fopen("Usuarios.txt","a");

        //Leer escribir
        $Texto = "UserName=".$UserName."\n".
        "Password=".$Password."\n".
        "Tipo=".$Tipo."\n".
        "Status=".$Status."\n"."\n";
        fwrite($Manejador,$Texto);


        //Cerrar
        fclose($Manejador);
    }

    function GeneraCsV($UserName,$Password,$Tipo,$Status) {

        if(file_exists("Usuarios.csv")) {
            $Encabezado="";
        } else {
            $Encabezado="UserName,Password,Tipo,Status"."\n";
        }

        //Abrir 
        $Manejador= fopen("Usuarios.csv","a");

        //Leer escribir
        $Texto = $Encabezado.$UserName.",".$Password.",".$Tipo.",".$Status."\n";
        fwrite($Manejador,$Texto);


        //Cerrar
        fclose($Manejador);
    }

    function GeneraXml($UserName,$Password,$Tipo,$Status) {

        //Abrir 
        $Manejador= fopen("Usuarios.xml","a");

        //Leer escribir
        $Texto = "\n<UserName>".$UserName."</UserName> \n"."<Password>".$Password."</Password> \n"."<Tipo>".$Tipo."</Tipo> \n"
        ."<Status>".$Status."</Status> \n";
        fwrite($Manejador,$Texto);


        //Cerrar
        fclose($Manejador);
    }

?>