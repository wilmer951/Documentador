<?php
	require_once "Conexion.php";
	class Datosinterfaz extends Conexion{



#CONSULTA  DE MODULOS
#-------------------------------------


public static function consultaModulosModelo($tabla){


    $stmt = Conexion::conectar()->prepare("SELECT mod_id,mod_nom FROM $tabla where estado=1 ORDER BY mod_nom ASC");	


    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();

}



#CONSULTA  DE SUBMODULOS
#-------------------------------------


public static function consultaSubmodulosModelo($idsubmodulo,$tabla){


    $stmt = Conexion::conectar()->prepare("SELECT sub_id,sub_nom FROM $tabla where sub_mod_id= $idsubmodulo and estado=1 ORDER BY sub_nom ASC");	



    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();

}




#CONSULTA  DE CATEGORIAS
#-------------------------------------


public static function consultaCategoriasModelo($submodulo,$tabla){


    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE cate_sub_id=$submodulo and estado=1 ORDER BY cate_nom ASC");	


    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();

}



#CONSULTA  DE INPUTS
#-------------------------------------


public static function consultainputsModelo($categoria,$tabla){


    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE cate_id=$categoria and estado=1 ORDER BY cate_nom ASC");	


    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();

}





}//fin clase principal