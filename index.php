<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/ruta.controlador.php";
require_once "controladores/fondo.controlador.php";
require_once "modelos/fondo.modelo.php";

require_once "controladores/usuarios.controlador.php";
require_once "modelos/usuarios.modelo.php";

require_once "extensiones/PHPMailer/PHPMailerAutoload.php";
require_once "extensiones/vendor/autoload.php";
$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();