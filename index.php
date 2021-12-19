<?php

require_once "Controlador/Controlador_enlaces.php";
require_once "Controlador/Controlador_login.php";
require_once "Controlador/Controlador_notas.php";
require_once "Controlador/Controlador_itemmenu.php";



require_once "Modelo/Modelo.php";
require_once "Modelo/crud.php";
require_once "Modelo/crud_login.php";
require_once "Modelo/crud_notas.php";
require_once "Modelo/crud_itemmenu.php";

$mvc = new Controlador_enlaces();
$mvc -> plantilla();

?>



