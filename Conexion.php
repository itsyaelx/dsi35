<?php

function Conectar(){
    $Servidor="127.0.0.1";
    $Usuario="root";
    $Contrasena="";
    $BD="controlvehicular";
    $Con=mysqli_connect($Servidor,$Usuario,$Contrasena,$BD);
    return $Con;
}

function Ejecutar($Con,$SQL){
    $Result=mysqli_query($Con,$SQL) or die(mysqli_error());
    return $Result;
}

function Desconectar($Con){
    mysqli_close($Con);
}
?>