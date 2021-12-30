<?php include "controlsesion.php";  ?>
<div class="divventanaemergente">

        <div class="card">
          <div class="card-body">
                  <h5>Utiliades</h5>

                  <button id="buttoncodVeri">Cod. Verificación</button>
                    <button id="edad">Calcular Edad</button>
                    <button id="anullserial">Anullseriales</button>
            </div>
          </div>

<div class="contenidoutili"></div>


            
<?php  
include "utili_codveri.php"; 
include "utili_edad.php";
include "utili_anulserial.php";?>

</div>    




















