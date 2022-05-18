<?php

//Abrir 

$Manejador = fopen("File1.txt", "w+"); 

// Leer o Escribir 
//fwrite($Manejador, "Hola");
//Leer 
$Linea = fgets($Manejador); 

print($Linea);
//Cerrar 

fclose($Manejador);


//Caracter
$Caracter= fgetc($Manejador)
?>