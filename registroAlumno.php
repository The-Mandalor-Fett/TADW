<?php
include("./conexion.php");

$boleta = $_POST["boleta"];
$nombre = $_POST["nombre"];
$primerApe = $_POST["primerApe"];
$segundoApe = $_POST["segundoApe"];
$correo = $_POST["correo"];
$tt = $_POST["tt"];

$sqlCheckAlumno = "SELECT * FROM alumno WHERE id_alumno = '$boleta'";
$resCheckAlumno = mysqli_query($conexion, $sqlCheckAlumno);
if(mysqli_num_rows($resCheckAlumno) == 1){
    echo "<h5>Ya está registrada la boleta $boleta.<br>Favor de verificar datos.<br>
    <a href='./proyecto1.html'>Regresar</a>";
}
else{
$sqlInsAlumno = "INSERT INTO alumno (id_alumno,nombre,pApellido,sApellido) VALUES('$boleta','$nombre','$primerApe','$segundoApe')";
$resInsAlumno = mysqli_query($conexion, $sqlInsAlumno);
if(mysqli_affected_rows($conexion) == 1){
    echo "<h5>Se agregó correctamente el registro a la BD.<br><a href='./proyecto1.html'>Regresar</a></h5>";
}
else{
    echo "<h5>Error. No se  pudo agregar el registro a la BD.<br>Favor de intentarlo nuevamente<br><a href='./proyecto1.html'>Regresar</a></h5>";
}
    }
?>$sqlInsLiderContrasena = "INSERT INTO usuario (id,contrasena) VALUES('mysqli_insert_id($conexion)','$contrasena')";
$resInsLiderContrasena = mysqli_query($conexion, $sqlInsLiderContrasena);