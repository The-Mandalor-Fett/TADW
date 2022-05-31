<?php
session_start();
if(!isset($_SESSION["login"])){
    header("location:/TADW/ProyectoSesion.html");
}
else{
    echo $_SESSION["login"];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>BDs - PHP/MySQL</title>
<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no' />
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
  <h3>Bienvenido</h3>
  <h4><a href="./cerrarSesion.php?sesion=login">Cerrar Sesión</a>
  
</body>
</html>
<?php
}
?>