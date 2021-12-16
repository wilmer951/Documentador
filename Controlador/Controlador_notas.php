<?php
	
	class Controlador_notas  {


//******************** CONSULTA NOTAS. //********************
public static function notasControlador(){


	$id=$_SESSION["id"];

	$respuesta = Datosnotas::notasModelo($id,"usuarios");


	echo '

	<input type="hidden" value="'.$_SESSION["usuario"].'" id="usuario">
	<textarea class="form-control" id="notas" placeholder="Tus notas">'.$respuesta["notas"].'</textarea>';


		}



}