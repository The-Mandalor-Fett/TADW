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
<link href="" rel="stylesheet">
</head>
<body>
<form action="./registrarLider.php" method="post">
    <h5>Registrar Lider</h5>
    <label for="boleta">Boleta:</label>
    <input type="number" id="boleta" name="boleta"><br>
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
<form action="./registroAlumno.php" method="post">
    <h5>Registrar Usuario</h5>
    <label for="boleta">Boleta:</label>
    <input type="number" id="boleta" name="boleta"><br>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="primerApe">Primer Ape.:</label>
    <input type="text" id="primerApe" name="primerApe"><br>
    <label for="segundoApe">Segundo Ape.:</label>
    <input type="text" id="segundoApe" name="segundoApe"><br>
    <label for="correo">Correo:</label>
    <input type="text" id="correo" name="correo"><br>
    <label for="tt">Trabajo Terminal:</label>
    <input type="text" id="tt" name="tt"><br>
    <button type="submit">Guardar</button>
</form>
</body>
</html>
