<?php //************* METODO REDIRECCION A PLANTILLA **************

class Controlador_login {


//********************* METODO LOGIN  *******************************	


public function loginControlador(){


    if(isset($_POST["nameUserLogin"]))
        {
                
    $nameusuario=strtoupper($_POST["nameUserLogin"]);


    
        $encriptar = crypt($_POST["namePasswordLogin"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

        $datosControlador = array( "usuario"=>$nameusuario, "password"=>$encriptar);
        $respuesta = Datoslogin::loginModelo($datosControlador, "usuarios");


        if ($respuesta["usuario"]==$nameusuario && $respuesta["password"]==$encriptar)

            {

            
            
            session_start();
            $_SESSION["validar"] = true;
            $_SESSION["usuario"] = $respuesta["usuario"];
            $_SESSION["nameusr"] = $respuesta["nombres"];
            $_SESSION["id"] = $respuesta["id"];
            $onllogin=$respuesta["id_login"];


            
            $actLogin = Datoslogin::ultimoLoginModelo($_SESSION["id"],"usuarios");


             header("location:index.php?ir=interfaz");



            
        }

        else
        { 

            echo '<div id="divErrorlogin" class="alert alert-danger" role="alert">Error usuario y/o contraseña</div>';
        }

    }


}







}