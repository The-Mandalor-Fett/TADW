<?php
  $servidorBD = "localhost";
  $usuarioBD = "root";
  $contrasenaBD = "";
  $nombreBD = "sem20222_iia";
  
  $conexion = mysqli_connect($servidorBD,$usuarioBD,$contrasenaBD,$nombreBD);

  mysqli_query($conexion, "SET NAMES 'utf8'"); //Para poder usar acentos y ñ ;)
	//if(mysqli_connect_errno($conexion)){
		//die("Problemas con la conexi&oacute;n al servidor MySQL: ".mysqli_connect_error());
	//}else{
		mysqli_query($conexion, "SET NAMES 'utf8'"); //Para poder usar acentos y ñ ;)
	//}
?>