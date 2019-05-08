<?php  
	
	define("PERMISO", "0777");
	
	function sanitizar($var){

		$variable = gettype($var);

		switch ($variable) {
			case 'boolean':
				$result = (boolean) $var;
				break;
			case 'integer':
				$result = (int) $var;
				break;
			case 'double':
				$result = (int) $var;
				break;
			case 'string':
				$result = htmlentities($var, ENT_QUOTES, "UTF-8");
				break;
			case 'array':
				$result = (array) $var;
				break;
			case 'object':
				$result = null;
				break;
			case 'resource':
				$result = null;
				break;
			case 'NULL':
				$result = null;
				break;
			default:
				$result = null;
				break;
		}
		return $result;
	}

	function crearSesion($email,$password){
		setPreferences();
		session_start();
		$_SESSION['user'] = $email;
    $_SESSION['password'] = $password;
	}

	function cerrarSesion(){
		cleanPreferences();
		session_start();
		$_SESSION = array();
		session_destroy();
	}

	function login($email, $password){
		if($email == 'robert@a.com' && $password == '123'){
			return true;
		}else{
			return false;
		}
	}

	function navegar($ruta, $message = false){
		if($message){
			header("Location: $ruta?msg=$message");
		}else{
			header("Location: $ruta");
		}
		exit();
	}

	function createDirectory($folder){
		
		if(PHP_OS == 'WINNT'){
			$route = __DIR__.'\\'.$folder;
		}else{
			$route = __DIR__.'//'.$folder;
		}

		$permiso = PERMISO;
		
		if(!file_exists($route)){
			mkdir($route, $permiso); 
		}
	}

	function createFilee($fileName,$folder){
		
		if(PHP_OS == 'WINNT'){
			$route = __DIR__.'\\'.$folder.'\\'.$fileName;
		}else{
			$route = __DIR__.'//'.$folder.'//'.$fileName;
		}
		
		$permiso = "a+";

		if(!file_exists($route)){
			createDirectory($folder);
			$file = fopen($route, $permiso);
			fclose($file);
		}
	}

	function readFilee($fileName,$folder){
		
		if(PHP_OS == 'WINNT'){
			$route = __DIR__.'\\'.$folder.'\\'.$fileName;
		}else{
			$route = __DIR__.'//'.$folder.'//'.$fileName;
		}

		if(file_exists($route)){
    	
    	$file = fopen($route,  "r");
			
			while(!feof($file)){
				$content[] = fgets($file);  
			} 
			fclose($file);   
    }else{
			$content[] = null;
    }
    return $content;
	}

	function writeFilee($fileName,$folder,$content){

		if(PHP_OS == 'WINNT'){
			$route = __DIR__.'\\'.$folder.'\\'.$fileName;
		}else{
			$route = __DIR__.'//'.$folder.'//'.$fileName;
		}
		
		if(file_exists($route)){
			$file = fopen($route,  "a+");
			fwrite($file,$content);
			fwrite($file,"\r\n");
			fclose($file); 
		}else{
			createFilee($fileName,$folder);
			writeFilee($fileName, $folder, $content);
    }

	}

	function deleteFilee($fileName,$folder){

		if(PHP_OS == 'WINNT'){
			$route = __DIR__.'\\'.$folder.'\\'.$fileName;
		}else{
			$route = __DIR__.'//'.$folder.'//'.$fileName;
		}

		if(file_exists($route)){
			unlink($route);
			$flag = true;
		}else{
			$flag = false;
		}
		return $flag;
	}

	function setPreferences(){
		setcookie("backgroundColor", "#006600");
		setcookie("textColor", "#ffffff");
	}

	function cleanPreferences(){
		setcookie("backgroundColor", "#006600", time() - 3600);
		setcookie("textColor", "#ffffff", time() - 3600);
	}

?>