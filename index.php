<?php

require_once "Controlador/Controlador_enlaces.php";
require_once "Controlador/Controlador_login.php";
require_once "Controlador/Controlador_notas.php";
require_once "Controlador/Controlador_itemmenu.php";
require_once "Controlador/Controlador_interfaz.php";
require_once "Controlador/Controlador_checklist.php";
require_once "Controlador/Controlador_informacion.php";
require_once "Controlador/Controlador_postularplantilla.php";



require_once "Modelo/Modelo.php";
require_once "Modelo/crud_login.php";
require_once "Modelo/crud_notas.php";
require_once "Modelo/crud_itemmenu.php";
require_once "Modelo/crud_interfaz.php";
require_once "Modelo/crud_informacion.php";
require_once "Modelo/crud_postularplantilla.php";

$mvc = new Controlador_enlaces();
$mvc -> plantilla();

?>



