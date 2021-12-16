<?php
	require_once "Conexion.php";
	class Datosnotas extends Conexion{

# CONSULTA NOTAS
#-------------------------------------

	public static function notasModelo($id,$tabla){


		$stmt = Conexion::conectar()->prepare("SELECT notas from $tabla WHERE id='$id'");	

		$stmt->execute();
		
		return $stmt->fetch();

		$stmt->close();

	}



}
