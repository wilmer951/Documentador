<?php

class ModulosMVC{


//******************** METODO ENLACES ************************
		public static function enlacesModelos($enlaces)

			{


				if(
						$enlaces=="home"||
						$enlaces=="login"||
						$enlaces=="chpw"||
						$enlaces=="interfaz"||
						$enlaces=="psw"||
						$enlaces=="cmd"||
						$enlaces=="scp"||
						$enlaces=="utili"||
						$enlaces=="info"||
						$enlaces=="directorio"||
						$enlaces=="mtablet"||
						$enlaces=="checklist"||
						$enlaces=="checkMtablet"||
						$enlaces=="checkMtablet2"||
						$enlaces=="postularplanti"||
						$enlaces=="utili"||
						$enlaces=="salir"
						

							)

				     {


				     	  $enlaces="Vista/Modulos/".$enlaces.".php";

				     }else {


				     		$enlaces="Vista/Modulos/home.php";

				     		}


				     	return $enlaces;




			}







}//FIN CLASE PRINCIPAL