<?php

$matriz = [ [1,5,2,3], 
			[7,3,2,4], 
			[4,6,8,5]
		  ];

//Calculando Delta S
$ds = ($matriz[0][0])*( ($matriz[1][1]*$matriz[2][2]) - ($matriz[1][2]*$matriz[2][1]) ) - 
	  ($matriz[0][1])*( ($matriz[1][0]*$matriz[2][2]) - ($matriz[1][2]*$matriz[2][0]) ) +
	  ($matriz[0][2])*( ($matriz[1][0]*$matriz[2][1]) - ($matriz[1][1]*$matriz[2][0]) );

//Calculando Delta X
$temp = [$matriz[0][0],$matriz[1][0],$matriz[2][0]];

$matriz[0][0] = $matriz[0][3];
$matriz[1][0] = $matriz[1][3];
$matriz[2][0] = $matriz[2][3];

$dx = ($matriz[0][0])*( ($matriz[1][1]*$matriz[2][2]) - ($matriz[1][2]*$matriz[2][1]) ) - 
	  ($matriz[0][1])*( ($matriz[1][0]*$matriz[2][2]) - ($matriz[1][2]*$matriz[2][0]) ) +
	  ($matriz[0][2])*( ($matriz[1][0]*$matriz[2][1]) - ($matriz[1][1]*$matriz[2][0]) );

//Calculando Delta Y
$matriz[0][0] = $temp[0];
$matriz[1][0] = $temp[1];
$matriz[2][0] = $temp[2];

$temp = [$matriz[0][1],$matriz[1][1],$matriz[2][1]];

$matriz[0][1] = $matriz[0][3];
$matriz[1][1] = $matriz[1][3];
$matriz[2][1] = $matriz[2][3];

$dy = ($matriz[0][0])*( ($matriz[1][1]*$matriz[2][2]) - ($matriz[1][2]*$matriz[2][1]) ) - 
	  ($matriz[0][1])*( ($matriz[1][0]*$matriz[2][2]) - ($matriz[1][2]*$matriz[2][0]) ) +
	  ($matriz[0][2])*( ($matriz[1][0]*$matriz[2][1]) - ($matriz[1][1]*$matriz[2][0]) );

//Calculando Delta Z
$matriz[0][1] = $temp[0];
$matriz[1][1] = $temp[1];
$matriz[2][1] = $temp[2];

$matriz[0][2] = $matriz[0][3];
$matriz[1][2] = $matriz[1][3];
$matriz[2][2] = $matriz[2][3];

$dz = ($matriz[0][0])*( ($matriz[1][1]*$matriz[2][2]) - ($matriz[1][2]*$matriz[2][1]) ) - 
	  ($matriz[0][1])*( ($matriz[1][0]*$matriz[2][2]) - ($matriz[1][2]*$matriz[2][0]) ) +
	  ($matriz[0][2])*( ($matriz[1][0]*$matriz[2][1]) - ($matriz[1][1]*$matriz[2][0]) );

$x = $dx/$ds;
$y = $dy/$ds;
$z = $dz/$ds;

echo 'X = '.$x.'<br>';
echo 'Y = '.$y.'<br>';
echo 'Z = '.$z.'<br>';


