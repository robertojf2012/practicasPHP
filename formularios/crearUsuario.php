<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Registro</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<br>
		<h2 align="center">Registro</h2>
		<br>
		<div class="container" align="center">
			<form id="formCrear" method="post" action="broker.php">
				<input class="form-control" required="required" style="text-transform:uppercase" autofocus="autofocus" pattern="[A-Za-z]+" type="text" placeholder="Nombre" name="nombre">
				<br>
				<input class="form-control" required="required" style="text-transform:uppercase" pattern="[A-Za-z]+" type="text" placeholder="Apellido Materno" name="materno">
				<br>
				<input class="form-control" required="required" style="text-transform:uppercase" pattern="[A-Za-z]+" type="text" placeholder="Apellido Paterno" name="paterno">
				<br>
				<input class="form-control" maxlength="10" style="text-transform:uppercase" required="required" pattern="[a-Z0-9]+" type="text" placeholder="CURP" name="curp">
				<br>
				<input class="form-control" required="required" type="email" placeholder="Email" name="email">
				<br>
				<input class="form-control" required="required" min="1000000000" max="9999999999" type="number" placeholder="Celular" name="telefono">
				<br>
				<input id="pass1" class="form-control" required="required" type="password" placeholder="Contraseña" name="pass1">
				<br>
				<input id="pass2" class="form-control" onchange="validatePasswords()" required="required" type="password" placeholder="Repite Contraseña" name="pass2">
				
				<input class="form-control" type="hidden" name="route" value="<?=$_SERVER["REQUEST_URI"]?>">
				<br><br>
				<button id="buttonSubmit" class="btn btn-warning btn-lg" disabled="disabled" type="submit">Registrar</button>
			</form>
			<br>
			<a href="index.php"><button class="btn btn-outline-success btn-lg">Index</button></a>
		</div>

	</body>

	<script type="text/javascript">
		function validatePasswords(){
			var password1 = document.getElementById("pass1").value;
			var password2 = document.getElementById("pass2").value;
			if(password1 == password2){
				document.getElementById("buttonSubmit").disabled = false;
			}else{
				document.getElementById("buttonSubmit").disabled = true;
			}
		}
	</script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>