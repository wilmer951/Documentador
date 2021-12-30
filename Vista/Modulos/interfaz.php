<?php include "controlsesion.php";  ?>


<div class="divinterfaz"><!-- ************* INICIO DIV INTERFAZ ***********-->



     
<?php 
include "menu.php";  
 
?>


<!-- ************* INICIO DIV NOTAS ***********-->
	<div class="sectionnotas mb-2">

  <?php   
                                  $consultanotas = new Controlador_notas();
                                  $consultanotas -> notasControlador();
                                  ?>




  </div>
<!-- ************* FIN DIV NOTAS ***********-->



<!-- ************* INICIO DIV SELECCION MODULOS ***********-->
<div class="sectionmodulos">
<h6>modulos</h6>
<select class="form-select form-select-sm mb-1" name="" id="selectmodulo">
<option>seleccione una opción</option>
                  <?php   
                                $consultaModulo = new Controlador_interfaz();
                                $consultaModulo -> consultaModulosControlador();
                          ?>


</select>
<select class="form-select form-select-sm mb-1" id="selectSubmodulo">
<option value="">Seleccione una opción</option>
</select>
<select class="form-select form-select-sm mb-1" id="selectCategoria">
<option value="0">seleccione una opción</option>

</select>

</div>
<!-- ************* FIN DIV SELECCION MODULOS ***********-->



<!-- ************* INICIO DIV INPUT ***********-->


  <div class="sectioninputs">
  <form action="" id="forminputs" onSubmit="return false;">

  <div class="divinputs" ></div>
  <button id="generarplantilla" class="btn btn-sm btnone" style="text-aling:auto; font-size:12px;">Generar</button>'
</form>
  
</div>



<!-- ************* INICIO DIV INPUT ***********-->


<hr>

<!-- ************* INICIO DIV TIPIFICACIÓN ***********-->
<div class="sectitipificacion text-center">


<div class="infotipificacion">


</div>


 
</div>
<!-- ************* FIN DIV TIPIFICACIÓN ***********-->

<hr>

<!-- ************* INICIO BOTONES ***********-->
<div class="sectionbuttoncopy">


<div class="divloading text-center mt-5" style="display:none;">
    <div class="parpadea">Esperando...</div>
      </div>


<div class="divbotones" style="display:none;">
  
  
<textarea id="copydes" ></textarea>
<textarea id="copydia" ></textarea>
<textarea id="copysol" ></textarea>
<textarea id="copycie" ></textarea>




            <div id="verDesc" class="divhidden"></div>
            <div id="verDia" class="divhidden"></div>
            <div id="verSol" class="divhidden"></div>
            <div id="verCie" class="divhidden"></div>              

          <div class="row mb-1">
              <div class="col-10">
                  <button class="btn btn-sm btnone" onclick="CopyToClipboard('copydes');">Descripcion</button>
                  </div>
              <div class="col-2">
                    <div class="subtoton" id="verDescripcion"></div>
              </div>
          </div>

          
          <div class="row mb-1">
              <div class="col-10">
                <button class="btn btn-sm btnone" onclick="CopyToClipboard('copydia');">Diagnostico</button>
              </div>
              <div class="col-2">
                <div class="subtoton" id="verDiagnostico"></div>
              </div>
          </div>


          <div class="row mb-1">
               <div class="col-10">
                   <button class="btn btn-sm btnone" onclick="CopyToClipboard('copysol');">Soluciojn</button>
              </div>
              <div class="col-2">
                  <div class="subtoton" id="verSolucion"></div>
                </div>
          </div>


          <div class="row mb-1">
              <div class="col-10">
                  <button class="btn btn-sm btnone" onclick="CopyToClipboard('copycie');">cierre</button>
              </div>
              <div class="col-2">
                  <div class="subtoton" id="verCierre"></div>
                </div>
          </div>


</div>

</div>

<!-- ************* FIN BOTONES ***********-->






</div><!-- ************* FIN DIV INTERFAZ ***********-->




                                

    
    
