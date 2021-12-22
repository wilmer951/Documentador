<?php
session_start();

if(!$_SESSION["validar"]){

  header("location:index.php?ir=login");

  exit();

}

?>

<div class="divinterfaz"><!-- ************* INICIO DIV INTERFAZ ***********-->



     
<?php 
include "menu.php";  
 
?>


<!-- ************* INICIO DIV NOTAS ***********-->
	<div class="sectionnotas mb-2">
<textarea class="form-control" name="" id="">preuba</textarea>

  </div>
<!-- ************* FIN DIV NOTAS ***********-->



<!-- ************* INICIO DIV SELECCION MODULOS ***********-->
<div class="sectionmodulos">
<h6>modulos</h6>
<select class="form-select form-select-sm mb-1" name="" id="">
<option value="">Seleccione una opción</option>
</select>
<select class="form-select form-select-sm mb-1" name="" id="">
<option value="">Seleccione una opción</option>
</select>
<select class="form-select form-select-sm mb-1" name="" id="">
<option value="">Seleccione una opción</option>

</select>

</div>
<!-- ************* FIN DIV SELECCION MODULOS ***********-->



<!-- ************* INICIO DIV INPUT ***********-->
<div class="sectioninputs">
  <input class="form-control form-control-sm mb-1" type="text">
  <input class="form-control form-control-sm mb-1" type="text">
  <input class="form-control form-control-sm mb-1" type="text">


  <button class="btn btn-sm btnone" style="font-size:12px;">Generar</button>

</div>
<!-- ************* INICIO DIV INPUT ***********-->




<!-- ************* INICIO DIV TIPIFICACIÓN ***********-->
<div class="sectitipificacion text-center py-4">

<button class="btn btn-sm btn-success">ver tipificacion</button>
 
</div>
<!-- ************* FIN DIV TIPIFICACIÓN ***********-->



<!-- ************* INICIO BOTONES ***********-->
    <div class="sectionbuttoncopy">

    <div class="mb-1">
        <button class="btn btn-sm btnone w-100">Descripcion</button>
    </div>
    <div class="mb-1">
        <button class="btn btn-sm btnone w-100">Diagnostico</button>
    </div>
    <div class="mb-1">
          <button class="btn btn-sm btnone w-100">Soluciojn</button>
    </div>
    <div class="mb-1">
          <button class="btn btn-sm btnone w-100">cierre</button>
    </div>


</div>
<!-- ************* FIN BOTONES ***********-->






</div><!-- ************* FIN DIV INTERFAZ ***********-->




                                

    
    
