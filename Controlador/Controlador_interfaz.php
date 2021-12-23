
<?php
	
	class Controlador_interfaz{


//********************* METODO CONSULTA MODULOS  *******************************	

public function consultaModulosControlador(){

		

	$respuesta = Datosinterfaz::consultaModulosModelo("modulos");

	foreach ($respuesta as $row => $item) {
		
		echo '
		<option value="'.$item["mod_id"].'">'.$item["mod_nom"].'</option>

		';

	}


}





//********************* METODO CONSULTA SUBMODUOS  *******************************	

public static function consultaSubmodulosControlador($submodulosconsulta){


	$datosControlador=$submodulosconsulta;
	echo '<option >seleccione una opción</option>';

	$respuesta = Datosinterfaz::consultaSubmodulosModelo($datosControlador,"submodulos");

	foreach ($respuesta as $row => $item) {
		
		echo '
		<option value="'.$item["sub_id"].'">'.$item["sub_nom"].'</option>

		';

	}

}


//********************* METODO CONSULTA CATEGORIAS  *******************************	

public static  function consultaCategoriasControlador($categoriaConsulta){


	$datosControlador=$categoriaConsulta;

	echo '<option value="0">seleccione una opción</option>';

	$respuesta = Datosinterfaz::consultaCategoriasModelo($datosControlador,"categorias");


	foreach ($respuesta as $row => $item) {
		
		echo '

		<option value="'.$item["cate_id"].'">'.$item["cate_nom"].'</option>

		';

	}

}



//********************* METODO CONSULTA CATEGORIAS  *******************************	

public static  function consultainputsControlador($categoriaConsulta){


	$datosControlador=$categoriaConsulta;

	
	$respuesta = Datosinterfaz::consultainputsModelo($datosControlador,"categorias");

	$inputs = array( 
		"inputdesone"=>$respuesta["cate_inp_des1"],
		"inputdestwo"=>$respuesta["cate_inp_des2"],
		"inputdiaone"=>$respuesta["cate_inp_dia1"],
		"inputdiatwo"=>$respuesta["cate_inp_dia2"],
		"inputsolone"=>$respuesta["cate_inp_sol1"],
		"inputsoltwo"=>$respuesta["cate_inp_sol2"],
		
	);

	echo json_encode($inputs);


}









}//fin clase principall

