<?php
session_start();

if(!$_SESSION["validar"]){

  header("location:index.php?ir=login");

  exit();

}

?>



     
<?php 
include "menu.php";  
 
?>


<!-- ************* DIV NOTAS ***********-->


<div class="divDocumentador">

	<div class="divtextarea">

                          <?php   
                                  $consultanotas = new Controlador_notas();
                                  $consultanotas -> notasControlador();
                          ?>




	</div>



  </div>
<!-- DIV NOTAS -->











                                

    
    
