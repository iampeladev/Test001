	
	<?php
		if($_POST){
			$name = $_POST['name'];
			$telefono = $_POST['telefono'];
			$email = $_POST['email'];
			$message = $_POST['message'];

		//Enviar email
			//mail("j.andrew.sears@gmail.com", "51 Deep comment from" .$email, $message);
			//Los datos a continuación son de prueba y deben ser editados una vez generada la definicion formal.
			mail("grs.iampela@gmail.com, gonzalorivera.exe@gmail.com", "Consulta WEB: " .$email, "- Enviado por: " .$name ." - Telefono: " .$telefono ." - Mensaje: " .$message);
		}
	?>