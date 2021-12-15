<?php


//******************** FUNCION ENLACES ************************

		
class ModulosMVC
	{



		public static function enlacesModelos($enlaces)

			{


				if(
						$enlaces=="home"||
						$enlaces=="login"
						
						
						
					
					

							)

				     {


				     	  $enlaces="Vista/Modulos/".$enlaces.".php";

				     }else {


				     		$enlaces="Vista/Modulos/home.php";

				     		}


				     	return $enlaces;




			}







	}



?>

