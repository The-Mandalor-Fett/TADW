<?php
include("./conexion.php");
$boleta = $_POST["boleta"];
$nombre = $_POST["nombre"];
$primerApe = $_POST["primerApe"];
$segundoApe = $_POST["segundoApe"];
$correo = $_POST["correo"];
$contrasena = md5($_POST["contrasena"]);


#Lider
$sqlCheckLider = "SELECT * FROM lider WHERE id_lider = '$boleta'";
$resCheckLider = mysqli_query($conexion, $sqlCheckLider);
if(mysqli_num_rows($resCheckLider) == 1){
    echo "<h5>Ya está registrada la boleta $boleta.<br>Favor de verificar datos.<br>
    <a href='./proyecto1.html'>Regresar</a>";
}
else{
$sqlInsLider = "INSERT INTO lider (id_lider,nombre,pApellido,sApellido,correo) VALUES('$boleta','$nombre','$primerApe','$segundoApe','$correo')";
$resInsLider = mysqli_query($conexion, $sqlInsLider);
$sqlInsLiderContrasena = "INSERT INTO usuario (id,contrasena,id_rol) VALUES('$boleta','$contrasena','1')";
$resInsLiderContrasena = mysqli_query($conexion, $sqlInsLiderContrasena);
if(mysqli_affected_rows($conexion) == 1){
    echo "<h5>Se agregó correctamente el registro a la BD.<br><a href='/proyecto1.html'>Regresar</a></h5>";
}
else{
    echo "<h5>Error. No se  pudo agregar el registro a la BD.<br>Favor de intentarlo nuevamente<br><a href='/proyecto1.html'>Regresar</a></h5>";
}
    }   
?>