<?php
    session_start();
    $FUserName = $_POST['UserName'];
    $FPassword = $_POST['Password'];

    include("Conexion.php");
    $Con=Conectar();
    $SQL="SELECT * FROM Cuentas WHERE UserName = '$FUserName';";
    $Result=Ejecutar($Con,$SQL);
    $Existe=mysqli_num_rows($Result);
    $Fila= mysqli_fetch_row($Result);
    if($Existe==1) {
        //print("El usuario existe");
        
        if($Fila[1]==$FPassword) {
            //print("Contraseña correcta");
            $SQL="UPDATE Cuentas set intentos=0 WHERE UserName = '$FUserName';";
            $Result=Ejecutar($Con,$SQL);
            if($Fila[3]==1) {
                //print("Cuenta activa");
                if($Fila[4]==0) {
                    //print("Cuenta sin bloqueo");
                    //print("ENTRAR");
                    
                    if($Fila[2]=="A"){
                        $_SESSION['Admin123']=1;
                        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=MenuA.php">');
                    }else {
                        $_SESSION['Usuario123']=1;
                        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=MenuU.php">');
                    }
                } else {
                    //print("Cuenta bloqueada");
                }
            } else {
                //print("Cuenta NO activa");
            }
        } else {

            print("Contraseña incorrecta");
            if($Fila[5]==2) {
                $SQL="UPDATE Cuentas set Bloqueado=1 WHERE UserName = '$FUserName';";
                $Result=Ejecutar($Con,$SQL);
                print("Alcanzó la máxima cantidad de intentos permitidos, cuenta bloqueada");
            } else {
                $SQL="UPDATE Cuentas set intentos=intentos+1 WHERE UserName = '$FUserName';";
                $Result=Ejecutar($Con,$SQL);
            }

        }
    } else {
        print("El usuario NO existe");
    }
    Desconectar($Con);
?>