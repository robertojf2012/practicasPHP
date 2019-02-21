<?php
$horas = 8;
$total = 0;

for ($i=1; $i<=$horas; $i++) { 
	if($i<=2){ //primeras 2
		$costo = $i*5;
	}
	if($i>2 && $i<=5){ //siguientes 3
		$costo = $i*4;
	}
	if($i>5 && $i<=10){ // 5 siguientes
		$costo = $i*3;
	}
	if($i>10){ //despues de 10
		$costo = $i*2;
	}
	$total = $total + $costo;	
}

echo "Cobrar: $".$total;

