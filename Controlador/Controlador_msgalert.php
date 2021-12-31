<?php //************* METODO REDIRECCION A PLANTILLA **************

class Controlador_msgalert {


    public static function consultarMsgAlertControlador(){

        session_start();
        $usuario=$_SESSION["usuario"];

        $conf_lectura= Datosmsgalert::consultarLecturaUusarioModelo($usuario,"usuarios");
            
        
            $respuesta = Datosmsgalert::consultaAlertsModelo("alerts");
        
            if ($respuesta["est_alert"]==1 & $conf_lectura["lec_alert"]==1) {
                echo json_encode($respuesta);
                
            
            }else{

                echo "none";
            }
        


    }




//********************* Confirmar lectura alert*******************************	

public static function confirmarLecturAlertaControlador(){

    session_start();
    $usuario=$_SESSION["usuario"];
    
        
    
        $respuesta = Datosmsgalert::confirmarLecturAlertaModelo($usuario,"usuarios");
    
        
    
    }
    







     }//fin clase principal+