<!DOCTYPE html>
<html>
	<head>
		<title>Practica 4</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	</head>
	<body>
		<h3 style="padding-left: 10px;">Dinamico</h3>
		<form method="post" action="" name="calcular" class="col-md-4" style="padding-left: 10px;">
		  <div class="form-group">
		    <input type="text" class="form-control" name="num" placeholder="Cantidad de elementos">
		    <br>
		  </div>
		  <button type="submit" class="btn btn-primary">Calcular</button>
		</form>
		<br>
		<?php  
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				
				$num = $_POST['num'];
			
				for ($i=1; $i<=$num; $i++) {
					$color = rand(1,3);
					$text = 0;
				switch ($color) {
				case 1:
					$text = 'red';
				break;
				case 2:
					$text = 'blue';
				break;
				case 3:
					$text = 'green';
				break;
				default:
				break;
				} 
				echo '<label><bstyle="color:'.$text.';">'.$i.' etiqueta de prueba</b> </label>';
				echo "<input type='text' style='height:40px; width:400px;' placeholder='Escribe aqui'> </input>";
				echo '<button style="height:40px; width:80px;">Click</button><br><br>';
				}
			}
		?>	
	</body>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>