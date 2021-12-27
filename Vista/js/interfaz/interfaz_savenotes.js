$("#notas").change(function(){
    var notas = $("#notas").val();
    var datos = new FormData();
	datos.append("notas", notas);
	
	$.ajax({
		url:"Vista/Modulos/ajax/ajax_notas.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){

				console.log(respuesta);

		}


	});

    
});
    
    
    