<?php

require_once "../../../Controlador/Controlador_msgalert.php";
require_once "../../../Modelo/crud_msgalert.php";

class Ajax_msgalert{


    

public function  consultarMsgAlertAjax(){


    $respuesta = Controlador_msgalert::consultarMsgAlertControlador(); 
    echo $respuesta;
}


//********************* CONFIRMAR LECTURA AJAX  *******************************		

public function confirmarLecturAlertaAjax(){

	$respuesta = Controlador_msgalert::confirmarLecturAlertaControlador(); 
	
		

	}



 }//fin clase principal


 if(isset( $_POST["conmsg"])){
	
	$f = new Ajax_msgalert();
	$f -> consultarMsgAlertAjax();

}


if(isset( $_POST["conflect"])){

	
	$j = new Ajax_msgalert();
	$j -> confirmarLecturAlertaAjax();
}

