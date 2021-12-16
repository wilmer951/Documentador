$("#itemcomandos").click(function(){

    $("#offcanvas-title").html('Comandos');    

    
    var itemmenu='cmd';


    var datos = new FormData();
	datos.append("itemmenu", itemmenu);

	
	$.ajax({
		url:"Vista/Modulos/ajax/ajax_itemmenu.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		
		success:function(respuesta){


            $("#tableitemhead").html('<tr><td>Descripción</td></tr>');
            $("#tableitembody").html(respuesta);   

            console.log(respuesta);

	

		}

	});

















    
        });
    

    

$("#itemutilidades").click(function(){

            $("#offcanvas-title").html('Utilidades');    
        
            
            
});