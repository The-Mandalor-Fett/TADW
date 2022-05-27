<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Registrar</title>
<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no'/>
<meta name="description" content="">
<meta name="keywords" content="">

<!-- LINKS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
<link rel="stylesheet" href="./validetta-1.0.1/dist/validetta.css">

<link href="" rel="stylesheet">

<!--SCRIPTS -->
<script src="./jquery-3.6.0.js"></script>
<script src="./validetta-1.0.1/dist/validetta.js"></script>
<script src="./validetta-1.0.1/localization/validettaLang-es-ES.js"></script>
<script src="./validacion.js"></script>


</head>
<body>
<form id="formAlumno"  action="./registrarLider.php" method="post">
    <h5>Registrar Alumno</h5>
    <label for="boleta">Boleta:</label>
    <input type="text" id="boleta" name="boleta" data-validetta="required,number,minLength[8],maxLength[10],"><br>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="primerApe">Primer Ape.:</label>
    <input type="text" id="primerApe" name="primerApe"><br>
    <label for="segundoApe">Segundo Ape.:</label>
    <input type="text" id="segundoApe" name="segundoApe"><br>
    <label for="correo">Correo:</label>
    <input type="text" id="correo" name="correo"><br>
    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena"><br>
    <button type="submit">Guardar</button>
</form>

</body>
</html>
