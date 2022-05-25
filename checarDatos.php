<?php
session_start();
include("./conexion.php");
$usuario = $_POST["usuario"];
$contrasena = md5($_POST["contrasena"]);

$sqlCheckUsr = "SELECT * FROM usuario WHERE id = '$usuario' AND contrasena = '$contrasena'";
$resCheckUsr = mysqli_query($conexion, $sqlCheckUsr);
if(mysqli_num_rows($resCheckUsr) == 1){
    $_SESSION["login"] = true;
    header("location:./proyecto.php");
}
else{
    echo "Tus datos no están registrados. Favor de registrarse.
    <a href='./proyecto1.html'>Regresar</a>";
    }
?>