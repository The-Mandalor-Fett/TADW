<?php
include("./conexion.php");
$boleta = $_POST["usuario"];
$nombre = $_POST["nombre"];
$primerApe = $_POST["primerApe"];
$segundoApe = $_POST["segundoApe"];
$correo = $_POST["correo"];
$contrasena = md5($_POST["contrasena"]);

$respuesta_AX = [];

#Lider
$sqlCheckLider = "SELECT * FROM lider WHERE id_lider = '$boleta'";
$resCheckLider = mysqli_query($conexion, $sqlCheckLider);
if(mysqli_num_rows($resCheckLider) == 1){
    $respuesta_AX["codigo"] = 0;
    $respuesta_AX["mensaje" ]= "Ya está registrada la boleta $boleta";
}
else{
$sqlInsLiderUsuario = "INSERT INTO usuario (id,contrasena,id_rol) VALUES('$boleta','$contrasena','1')";
$resInsLiderUsuario = mysqli_query($conexion, $sqlInsLiderUsuario);
$sqlInsLider = "INSERT INTO lider (id_lider,nombre,pApellido,sApellido,correo) VALUES('$boleta','$nombre','$primerApe','$segundoApe','$correo')";
$resInsLider = mysqli_query($conexion, $sqlInsLider);
if(mysqli_affected_rows($conexion) == 1){
    $respuesta_AX["codigo"] = 1;
    $respuesta_AX["mensaje"]= "Registro exitoso";
}
else{
    $respuesta_AX["codigo"] = 2;
    $respuesta_AX["mensaje"]= "Error no se pudo realizar el registro";
    }   
}
echo json_encode($respuesta_AX);
?>