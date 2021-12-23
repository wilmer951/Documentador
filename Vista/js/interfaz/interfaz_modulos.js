/*=============================================
CONSULTAR SUBCATEGORIAS
=============================================*/



$("#selectmodulo").change(function(){

			
    $("#selectCategoria").val("0");
    $('#divInput').css('display','none');
    
    $( "div.divbotonesCopiado" ).replaceWith( $( ".mensajeloading" ) );
    $('.mensajeloading').css('display','block');
    $('.divplantillanone').css('display','none');

    
    $(".divTipificacion").html("");
    
    

    var modulo = $("#selectmodulo option:selected").val();

    
    

var datos = new FormData();
datos.append("modulo", modulo);


$.ajax({
url:"Vista/Modulos/ajax/ajax_interfaz.php",
method:"POST",
data: datos,
cache: false,
contentType: false,
processData: false,
success:function(respuesta){

    
$('#selectSubmodulo').html(respuesta);

}

});

});


/*=============================================
CONSULTAR SUBMODULOS
=============================================*/



$("#selectSubmodulo").change(function(){


    $('#divInput').css('display','none');
    $("#selectCategoria option[value="+0+"]").attr("selected",true);
    var categoria = $("#selectSubmodulo option:selected").val();

    
    

var datos = new FormData();
datos.append("submodulo", categoria);

$.ajax({
url:"Vista/Modulos/ajax/ajax_interfaz.php",
method:"POST",
data: datos,
cache: false,
contentType: false,
processData: false,
success:function(respuesta){

$('#selectCategoria').html(respuesta);

}

});

});


/*=============================================
CONSULTAR INPUTS
=============================================*/



$("#selectCategoria").change(function(){


    
var inputs = $("#selectSubmodulo option:selected").val();

    
    

var datos = new FormData();
datos.append("categoria", inputs);

$.ajax({
url:"Vista/Modulos/ajax/ajax_interfaz.php",
method:"POST",
data: datos,
cache: false,
contentType: false,
processData: false,
success:function(respuesta){
    var resul = $.parseJSON(respuesta);
    console.log(resul['inputdesone']);

}

});

});








