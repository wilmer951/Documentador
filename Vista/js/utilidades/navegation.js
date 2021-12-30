$("#buttoncodVeri").click(function(){


$(".divCodiVeri").css('display','block');
$(".divEdad").css('display','none');
$(".anullserial").css('display','none');





	 	});




$("#edad").click(function(){



$(".divCodiVeri").css('display','none');
$(".anullserial").css('display','none');
$(".divEdad").css('display','block');


	});




$("#anullserial").click(function(){

$(".divimagenutliades").css('display','none');
$(".divResul").css('display','none');

$(".anullserial").css('display','block');
$(".divCodiVeri").css('display','none');
$(".divEdad").css('display','none');


	});





$("#generarCodVerifi").click(function(){


var nprperacion=$("#npreparacion").val();

alert("prueba");


				$(".divResul").html("");


	});





$("#generarEdad").click(function(e){

 e.preventDefault();


var string=$("#formedad").serialize();
	
	$.ajax({
		url:"Vista/Modulos/ajax.php",
		method:"POST",
	    data : $("#formedad").serialize(),
		
		cache: false,
		
		processData: false,

		beforeSend: function(){

				$(".divResul").html("");

			},


		success:function(respuesta){



		$(".divResul").css('display','block');
		$(".divResul").html(respuesta);

	

		}

	});











});