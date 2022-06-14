<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("location: /tadw/ProyectoSesion.html");
}
else{
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>picha </title>
<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no'/>
<meta name="description" content="">
<meta name="keywords" content="">

<!-- LINKS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" />
<link rel="stylesheet" href="./../JS/materialize/css/materialize.min.css">
<link rel="stylesheet" href="./../CSS/general.css">
<link rel="stylesheet" href="./../JS/validetta-1.0.1/dist/validetta.min.css">
<link rel="stylesheet" href="./../JS/package/dist/sweetalert2.min.css">


<!--SCRIPTS -->
<script src="./../JS/jquery-3.6.0.min.js"></script>
<script src="./../JS/JS/validetta-1.0.1/dist/validetta.min.js"></script>
<script src="./../JS/validetta-1.0.1/localization/validettaLang-es-ES.js"></script>
<script src="./../JS/materialize/js/materialize.min.js"></script>
<script src="./../JS/validacion.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" ></script>
<script src="./../JS/package/dist/sweetalert2.all.min.js"></script>
<script src="./../JS/validacionRegistro.js"></script>

</head>
<body>
<header>
    <img src="./../img/bg4.jpg" class="responsive-img">
</header>
<main class="valign-wrapper">
    <div class="container">
        <h3 class="center-align">Bienvenido al sistema de registro de usuario</h3>
        <h6 class="center-align">Por favor llena los campos requeridos</h6>
        <div class="row">
            <form class="col s12" id="formRegistro">
            <div class="row">
                <table class="responsive highlight">
                    <div class="input-field col s6">
                        <tbody>
                            <tr>
                                <td><i class='fas fa-file-alt prefix'></i>
                                <label for='nombre'>Nombre del TT:</label>
                                <input type='text' id='nombre' name='nombre' data-validetta='required'>
                                </td>
                            </tr>
                            <tr>
                                <td><i class='fas fa-clipboard prefix'></i>
                            <textarea id="descripcion" class="materialize-textarea" name="descripcion"></textarea>
                            <label for="descripcion">Descripción</label>
                                </td>
                            </tr>
                    </tbody>
                </table> 
            </div>
            
                <!-- <div class="input-field col s6">
                    <i class="fas fa-id-card prefix"></i>
                    <label for="usuario">Boleta:</label>
                    <input type="text" id="usuario" name="usuario" data-validetta="required,number">
                </div>
                <div class="input-field col s6">
                    <i class="fa fa-user prefix"></i>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" data-validetta="required">
                </div>
                <div class="input-field col s6">
                    <i class="fas fa-users prefix"></i>
                    <label for="primerApe">Primer Ape:</label>
                    <input type="text" id="primerApe" name="primerApe" data-validetta="required">
                </div>
                <div class="input-field col s6">
                    <i class="fas fa-users prefix"></i>
                    <label for="segundoApe">Segundo Ape:</label>
                    <input type="text" id="segundoApe" name="segundoApe" >
                </div>
                <div class="input-field col s6">
                    <i class="fas fa-at prefix"></i>
                    <label for="correo">Correo:</label>
                    <input type="email" id="correo" name="correo" data-validetta="required, email">
                </div>
                <div class="input-field col s6">
                    <i class="fas fa-key prefix"></i>
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" name="contrasena" id="contrasena" data-validetta="required,minLength[4],maxLength[8]">
                </div>
                <div class="col col offset-l3 l6 offset-m3 m6 offset-s2 s8">
                    <button class="btn blue darken-4 boton" type="submit">Registrarte</button>
                </div>
            </div> -->
        </form>
            
        
    </div>
    
</main>

<footer class="page-footer blue darken-4">
    <div class="footer-copyright">
    <div class="container">
    © Equipo alfa buena maravilla onda dinamita escuadrón lobo
    <a class="grey-text text-lighten-4 right" href="#!">ESCOM</a>
    </div>
    </div>
</footer>

</body>
</html> 

<?php
}
?>

