<?php
session_start();
include("./conexion.php");
$usuario = $_POST["usuario"];
$contrasena = md5($_POST["contrasena"]);


$sqlCheckUsr = "SELECT * FROM usuario WHERE id = '$usuario' AND contrasena = '$contrasena' AND id_rol = '1'";
$sqlCheckADMIN = "SELECT * FROM usuario WHERE id = '$usuario' AND contrasena = '$contrasena' AND id_rol = '0' ";
$resCheckUsr = mysqli_query($conexion, $sqlCheckUsr);
$resCheckADMIN = mysqli_query($conexion, $sqlCheckADMIN);
if(mysqli_num_rows($resCheckUsr) == 1){
    $_SESSION["login"] = true;
   
    header("location:./proyecto.php");
}
elseif(mysqli_num_rows($resCheckADMIN) == 1){
    $_SESSION["login"] = true;
    header("location:./admin.php"); 
    
}
else{
    echo "Tus datos no están registrados. Favor de registrarse.";
    //<a href='/tadw/proyecto1.html'>Regresar</a>;
    }
?>