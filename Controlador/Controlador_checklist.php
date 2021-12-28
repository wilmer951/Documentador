<?php //************* METODO CHECKLIST **************

class Controlador_checklist {





public function chmtabletAdaptadorcontrolador(){




	if(isset($_POST["resulitemst"])){


		$colorlink=$_POST["colorlink"];	
		$direIP=$_POST["direIP"];	
		$estadoitem2=$_POST["resulitem2"];
		$estadoitem3=$_POST["resulitem3"];
		$estadoitem4=$_POST["resulitem4"];
		$estadoitem5=$_POST["resulitem5"];
		$estadoitem6=$_POST["resulitem6"];
		$estadoitem7=$_POST["resulitem7"];	
		$estadofinal=$_POST["resulitemst"];	



		if ($colorlink != null) {

			$estadoitem1=", se realiza la verificación del color link del adaptador dando color ".$colorlink;

		}else
		{

			$estadoitem1="";
		}



		if ($estadoitem2 != null) {

			$estadoitem22=", se realiza ping a la dirección IP: " . $direIP ." siendo este " .$estadoitem2;

		}else
		{

			$estadoitem22="";
		}



		if ($estadoitem3==1) {

			$estadoitem3=", se verifica que el direccionamiento IP(IP Address, Netmask, Gateway address, DNS Address) coincida con la última actualización entregada";
		}else{

			$estadoitem3="";

		}


		if ($estadoitem4==1) {

			$estadoitem4=", se realiza borrado de cache de la aplicación de entrega de documentos";
		}else{

			$estadoitem4="";

		}


		if ($estadoitem5==1) {

			$estadoitem5=", se realiza reinicio de la Mtablet";
		}else{

			$estadoitem5="";

		}

		if ($estadoitem6==1) {

			$estadoitem6=", se verifica configuración de la fecha y hora";
		}else{

			$estadoitem6="";

		}


		if ($estadoitem7 != null) {

			$estadoitem77=", se verifica la versión de DED siendo ".$estadoitem7;
		}else{

			$estadoitem77="";

		}



		if ($estadofinal==0) {
			$estadofinal=". Luego de realizar estas verificaciones, se realizan pruebas y son exitosas.";
		}


		else if ($estadofinal==1) {
			$estadofinal=". Luego de realizar estas verificaciones, se realizan pruebas y la falla continua, por lo cual se realiza notificación a UNE para su revisión.";
		}



		echo '
		<div class="textareaoculto">
		<textarea id="copycheck1">Se identifica que la Mtablet se encuentra conectada por medio de Adaptador'.$estadoitem1.''.$estadoitem22.''.$estadoitem3.''.$estadoitem4.''.$estadoitem5.''.$estadoitem6.''.$estadoitem77.''.$estadofinal.'</textarea>
		</div>
		
<div class="text-center">
<button class="btn btn-success" onclick="CopyToClipboard(\'copycheck1\')">Copy</button>

</div>
		';


		
		
			
		




	}


}





//******************** CHECK MTABLET SIM. //********************


public function chmtabletSimControlador(){



	if(isset($_POST["resulitemst"])){


		$operador=$_POST["resulitem1"];
		$senal=$_POST["resulitem2"];
		$apn=$_POST["resulitem3"];
		$resulitem4=$_POST["resulitem4"];
		$resulitem5=$_POST["resulitem5"];		
		$resulitem6=$_POST["resulitem6"];
		$resulitem7=$_POST["resulitem7"];
		$resulitem8=$_POST["resulitem8"];
		$resulitem9=$_POST["resulitem9"];
		$estadofinal=$_POST["resulitemst"];



		if ($operador != null) {

			$itemoperador=', operador '.$operador;


		}else
		{

			$itemoperador="";
		}



		if ($senal != null) {

			$itemsenal=', se verifica el tipo de señal la cual arroja '.$senal;


		}else
		{

			$itemsenal="";
		}



		if ($apn == 1) {


			$itemapn=', se realiza la verificación de la configuración de la APN';	

		}else
		{

			$itemapn="";
		}


		if ($resulitem4 != null) {

			$resulitem4=', se dan indicaciones de retirar la SIM y volverla a colocar';


		}else
		{

			$resulitem4="";
		}

		if ($resulitem5 ==1) {

			$resulitem5=', se realiza reinicio de la Mtablet';


		}else
		{

			$resulitem4="";
		}


		if ($resulitem6 == 1) {

			$resulitem6=', se realiza verificación de la fecha y hora';


		}else
		{

			$resulitem6="";
		}



		if ($resulitem7 != null) {

			$resulitem77=', se verifica la versión del DED '.$resulitem7;


		}else
		{

			$resulitem77="";
		}



		if ($resulitem8==1) {

			$resulitem8=", se verifica el tipo de red preferido sea 4G";
		}else{

			$resulitem8="";

		}


		if ($resulitem9==1) {

			$resulitem9=", se realiza borrado de cache de la aplicación de entrega de documentos";
		}else{

			$resulitem9="";

		}



		if ($estadofinal == 0) {

			$estadofinal='. Luego de realizar estas verificaciones se realizan pruebas y son exitosas';


		}else if($estadofinal == 1)
		{

			$estadofinal='. Luego de realizar estas verificaciones se realizan pruebas y continua la falla, se procede a notificar al área de UNE para su revisión';
		}


		echo '
		<div class="textareaoculto">
		<textarea id="copycheck1">Se evidencia que la Mtablet se encuentra conectada por medio de SIM'.$itemoperador.''.$itemsenal.''.$itemapn.''.$resulitem4.''.$resulitem5.''.$resulitem6.''.$resulitem77.''.$resulitem8.''.$resulitem9.''.$estadofinal.'</textarea>
		</div>
		
			<div class="text-center">
			<button class="btn btn-success" onclick="CopyToClipboard(\'copycheck1\')">Copy</button>

			</div>
		';



	}


}



 }





 