<?php
	session_start();
	if(isset($_REQUEST['msg'])){
		echo $_REQUEST['msg'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mensaje</title>
</head>
<body style="background-color: <?= $_COOKIE['backgroundColor']; ?>">
	<?php
		if(isset($_SESSION['user'])){
			echo '<h3>Has iniciado sesion como:</h3>';
			echo '<h4>'.$_SESSION['user'].'</h4>';

			echo '
				<form action="broker.php" method="post">
					<input class="form-control" type="hidden" name="route" value="'.$_SERVER["REQUEST_URI"].'">
					<button type="submit">Cerrar Sesion</button>
				</form>
			';
		}
	?>
</body>
</html>