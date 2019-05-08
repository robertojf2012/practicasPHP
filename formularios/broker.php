<?php
	
	require_once 'functions.php'; 

	//VARIABLES DE REGISTRO
	$nombre = '';
	$materno = '';
	$paterno = '';
	$curp = '';
	$email = '';
	$telefono = '';
	$password = '';

	$message = '';
	$pagina = '';

	if(isset($_REQUEST['route'])) {

		$isroute = is_string($_REQUEST['route']);
		
		if($isroute){

			$route = $_REQUEST['route'];

			switch ($route) {
			
				case "/php/formularios/crearUsuario.php":

					if(isset($_REQUEST['nombre'])){
						$nombre = sanitizar($_REQUEST['nombre']);
					}else{
						$nombre = '';
					}

					if(isset($_REQUEST['materno'])){
						 $materno = sanitizar($_REQUEST['materno']);
					}else{
						$materno = '';
					}

					if(isset($_REQUEST['paterno'])){
						$paterno = sanitizar($_REQUEST['paterno']);
					}else{
						$paterno = '';
					}

					if(isset($_REQUEST['curp'])){
						$curp = sanitizar($_REQUEST['curp']);
					}else{
						$curp = '';
					}

					if(isset($_REQUEST['email'])){
						$email = sanitizar($_REQUEST['email']);
					}else{
						$email = '';
					}

					if(isset($_REQUEST['telefono'])){
						$telefono = sanitizar($_REQUEST['telefono']);
					}else{
						$telefono = '';
					}

					if(isset($_REQUEST['pass2'])){
						$password = sanitizar($_REQUEST['pass2']);
					}else{
						$password = '';
					}

					$message = 'Usuario Registrado con exito';
					$pagina = 'message.php';
				break;

				case "/php/formularios/login.php":

					if(isset($_REQUEST['email'])){
						$email = sanitizar($_REQUEST['email']);
					}else{
						$email = '';
					}

					if(isset($_REQUEST['password'])){
						$password = sanitizar($_REQUEST['password']);
					}else{
						$password = '';
					}

					if(login($email,$password)){
						$message = 'Login exitoso';
						crearSesion($email,$password);
						createDirectory('prueba');
					}else{
						$message = 'Error de login';
						cerrarSesion();
					}
					$pagina = 'message.php';
				break;

				case '/php/formularios/message.php?msg=Login%20exitoso':
					$pagina = 'login.php';
					cerrarSesion();
					break;
				
				default:
					echo "No autorizado";
					break;
			}
		}
		navegar($pagina,$message);
	}

?>






