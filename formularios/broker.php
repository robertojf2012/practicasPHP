<?php

	//VARIABLES DE REGISTRO
	$nombre = '';
	$materno = '';
	$paterno = '';
	$curp = '';
	$email = '';
	$telefono = '';
	$password = '';

	$message = '';

	if(isset($_REQUEST['route'])) {

		$isroute = is_string($_REQUEST['route']);
		
		if($isroute){

			$route = $_REQUEST['route'];

			switch ($route) {
			
				case "/php/formularios/crearUsuario.php":

					if(isset($_REQUEST['nombre'])){
						$nombre = htmlentities($_REQUEST['nombre'], ENT_QUOTES, "UTF-8");
					}else{
						$nombre = '';
					}

					if(isset($_REQUEST['materno'])){
						$materno = htmlentities($_REQUEST['materno'], ENT_QUOTES, "UTF-8");
					}else{
						$materno = '';
					}

					if(isset($_REQUEST['paterno'])){
						$paterno = htmlentities($_REQUEST['paterno'], ENT_QUOTES, "UTF-8");
					}else{
						$paterno = '';
					}

					if(isset($_REQUEST['curp'])){
						$curp = htmlentities($_REQUEST['curp'], ENT_QUOTES, "UTF-8");
					}else{
						$curp = '';
					}

					if(isset($_REQUEST['email'])){
						$email = htmlentities($_REQUEST['email'], ENT_QUOTES, "UTF-8");
					}else{
						$email = '';
					}

					if(isset($_REQUEST['telefono'])){
						$telefono = htmlentities($_REQUEST['telefono'], ENT_QUOTES, "UTF-8");
					}else{
						$telefono = '';
					}

					if(isset($_REQUEST['pass2'])){
						$password = htmlentities($_REQUEST['pass2'], ENT_QUOTES, "UTF-8");
					}else{
						$password = '';
					}

					$message = 'Usuario Registrado con exito';
				break;

				case "/php/formularios/login.php":

					if(isset($_REQUEST['email'])){
						$email = htmlentities($_REQUEST['email'], ENT_QUOTES, "UTF-8");
					}else{
						$email = '';
					}

					if(isset($_REQUEST['password'])){
						$password = htmlentities($_REQUEST['password'], ENT_QUOTES, "UTF-8");
					}else{
						$password = '';
					}

					if($email == 'robert@a.com' && $password == '123'){
						$message = 'Login exitoso';
					}else{
						$message = 'Error de login';
					}
				break;
				
				default:
					echo "No autorizado";
					break;
			}
		}

		header("Location: message.php?msg=$message");
		exit();

	}

?>






