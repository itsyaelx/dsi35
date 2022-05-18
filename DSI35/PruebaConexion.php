<?php
    $var1=mysqli_connect("127.0.0.1","root","","controlvehicular");
    $SQL="INSERT INTO LICENCIASSS VALUES('1','1','1','1','1','1');";
    $var2=mysqli_query($var1,$SQL);
    //print_r($var1);
    print($var2);

?>