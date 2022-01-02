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
<h6>Módulos</h6>
<select class="form-select form-select-sm mb-1" name="" id="selectmodulo">
<option>seleccione una opción</option>
                  <?php   
                                $consultaModulo = new Controlador_interfaz();
                                $consultaModulo -> consultaModulosControlador();
                          ?>


</select>
<select class="form-select form-select-sm mb-1" id="selectSubmodulo">
<option value="0">Seleccione una opción</option>
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

<div class="imglogo"><img class="img-fluid" src="Vista/Imagenes/logoIdemia.png" alt=""></div>

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
                <button class="btn btn-sm btnone" onclick="CopyToClipboard('copydia');">Diagnóstico</button>
              </div>
              <div class="col-2">
                <div class="subtoton" id="verDiagnostico"></div>
              </div>
          </div>


          <div class="row mb-1">
               <div class="col-10">
                   <button class="btn btn-sm btnone" onclick="CopyToClipboard('copysol');">Solución</button>
              </div>
              <div class="col-2">
                  <div class="subtoton" id="verSolucion"></div>
                </div>
          </div>


          <div class="row mb-1">
              <div class="col-10">
                  <button class="btn btn-sm btnone" onclick="CopyToClipboard('copycie');">Cierre</button>
              </div>
              <div class="col-2">
                  <div class="subtoton" id="verCierre"></div>
                </div>
          </div>


</div>

</div>

<!-- ************* FIN BOTONES ***********-->






</div><!-- ************* FIN DIV INTERFAZ ***********-->



















<!-- MODAL RECONEXIÓN DE SESION -->
<div id="modalreconexion" class="modal fade"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="staticBackdropLabel">Atención</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

  <form id="formloginrecone" class="formlogin" onsubmit="return:false;">
  
  <div class="row mb-4">
        <div class="form-group">
            <label>User</label>
            <input type="text" name="nameUserLogin" class="inputmayuscula" required>
            <div class="line"></div>
        </div>
  </div>
  


  <div class="row mb-4">
      <div class="form-group">
          <label>Password</label>
          <input type="password" name="namePasswordLogin" required>
          <div class="line"></div>
      </div>
    </div>

  <div class="row">
  
  <button id="btnreconectar" class="btn btn-sm btnone ">Reconectar</button>
  </div>

  <div id="alertreconection" class="alert-danger mt-2 py-1 px-2 text-center">Lo sentimos se prento una desconexión nesperada ingresa nuevamente tus credenciales.</div>

  </form>







      </div>
      
    </div>
  </div>
</div>



<!-- MODAL MENSAJES DE ALERTA -->
<div id="modalmsgalert" class="modal fade"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="staticBackdropLabel">Atención</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

<div id="artialert"></div>

  
<div class="mt-4 text-center">
<button  class="btn btn-sm btntwo "  data-bs-dismiss="modal" aria-label="Close" id="btnconfirmarlectura">Confirmar lectura</button>
</div>
      </div>
      
    </div>
  </div>
</div>


                                

    
    
