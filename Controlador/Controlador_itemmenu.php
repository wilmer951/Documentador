<?php
	
	class Controlador_itemmenu{


        public static function conTableItemMenuControlador($itemmenu){


                if ($itemmenu=="cmd") {
                    

                    $respuesta = Datositemmenu::consultaItemdelo("cmd");

                    	foreach ($respuesta as $row => $item) {

                          echo '   
                          <tr>
                          
                          <td><button>'.$item["cmd_des"].'</button></td>
                          <hr>
                          </tr>
                          ';

                         }
                    
                }


                if ($itemmenu=="pass") {
                    

                    $respuesta = Datositemmenu::consultaItemdelo("psw");

                    	foreach ($respuesta as $row => $item) {

                          echo '   
                          <tr>
                          <td>'.$item["psw_apli"].'</td>
                          <td>
                          <div><button>'.$item["psw_usu"].'</button></div>
                          <button>'.$item["psw_psw"].'</button></td>
                          
                          </tr>
                          ';

                         }
                    
                }

            

        }
    

    
    
    
    }