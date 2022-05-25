<?php
include("./conexion.php");

$boleta = $_POST["boleta"];
$nombre = $_POST["nombre"];
$primerApe = $_POST["primerApe"];
$segundoApe = $_POST["segundoApe"];
$correo = $_POST["correo"];
$contrasena = md5($_POST["contrasena"]);

$sqlCheckPK = "SELECT * FROM alumno WHERE boleta = '$boleta'";
$resCheckPK = mysqli_query($conexion, $sqlCheckPK);
if(mysqli_num_rows($resCheckPK) == 1){
echo "<h5>Ya está registrada la boleta $boleta.<br>Favor de verificar datos.<br>
<a href='./index.html'>Regresar</a>";
    }
else
    {
$sqlInsAlumno = "INSERT INTO alumno VALUES('$boleta','$nombre','$primerApe','$segundoApe','$correo','$fechaNac','$telcel','$contrasena',NOW())";
$resInsAlumno = mysqli_query($conexion, $sqlInsAlumno);
if(mysqli_affected_rows($conexion) == 1){
    echo "<h5>Se agregó correctamente el registro a la BD.<br><a href='./proyecto1.html'>Regresar</a></h5>";
}else
    {
        echo "<h5>Error. No se  pudo agregar el registro a la BD.<br>Favor de intentarlo nuevamente<br><a href='/proyecto1.html'>Regresar</a></h5>";
    }
    }
?>