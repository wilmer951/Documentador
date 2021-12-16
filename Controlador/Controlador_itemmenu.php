<?php
	
	class Controlador_itemmenu{


        public static function conTableItemMenuControlador($itemmenu){


                if ($itemmenu=="cmd") {
                    

                    $respuesta = Datositemmenu::consultaItemdelo("cmd");

                    	foreach ($respuesta as $row => $item) {

                          echo '   
                          <tr>
                          <td>'.$item["cmd_des"].'</td>
                          </tr>
                          ';

                         }
                    
                }


                if ($itemmenu=="psw") {
                    

                    $respuesta = Datositemmenu::consultaItemdelo("psw");

                    	foreach ($respuesta as $row => $item) {

                          echo '   
                          <tr>
                          <td>'.$item["cmd_des"].'</td>
                          </tr>
                          ';

                         }
                    
                }

            

        }
    

    
    
    
    }