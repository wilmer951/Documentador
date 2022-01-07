
    function consulMsgAlert(){

    var conmsg = "yes";

    var datos = new FormData();
	datos.append("conmsg", conmsg);

	
	$.ajax({
		url:"Vista/Modulos/ajax/ajax_msgalert.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){

            var resulalert = $.parseJSON(respuesta);
            console.log(resulalert);
            if(resulalert['alertst']!='none'){

            $('#artialert').html(resulalert[0]);
            $("#modalmsgalert").modal("show");

        }

		}

	});






    $("#btnconfirmarlectura").click(function(){

			
        var conflect = "oklectura";
        

var datos = new FormData();
datos.append("conflect", conflect);


$.ajax({
    url:"Vista/Modulos/ajax/ajax_msgalert.php",
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




        

    }   
 
 
