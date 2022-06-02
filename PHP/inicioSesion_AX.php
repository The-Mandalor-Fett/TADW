<?php

include("./conexion.php");
$usuario = $_POST["usuario"];
$contrasena = md5($_POST["contrasena"]);

$respuestaAX = [];

$sqlCheckUsr = "SELECT * FROM usuario WHERE id = '$usuario' AND contrasena = '$contrasena' AND id_rol = '1'";
$sqlCheckADMIN = "SELECT * FROM usuario WHERE id = '$usuario' AND contrasena = '$contrasena' AND id_rol = '0'";
$resCheckUsr = mysqli_query($conexion, $sqlCheckUsr);
$resCheckADMIN = mysqli_query($conexion, $sqlCheckADMIN);
if(mysqli_num_rows($resCheckUsr) == 1){
    $_SESSION["login"] = true;
    //header("location:./proyecto.php");
    $respuestaAX["codigo"] = 1;
    $respuestaAX["mensaje"] = "Inicio de sesión exitoso";
}
else{
    if(mysqli_num_rows($resCheckADMIN) == 1){
        $_SESSION["login"] = true;
        //header("location:./admin.php"); 
        $respuestaAX["codigo"] = 2;
        $respuestaAX["mensaje"] = "Inicio de sesión exitoso Administrador";
        
    }
    else{
        $respuestaAX["codigo"] = 0;
        $respuestaAX["mensaje"] = "Error. Boleta no resgistrada, por favor regístrate";
    }
    }
echo json_encode($respuestaAX);
?>