<?php

$f = 0;

$resultado= 1;

$n = 14;

$array = array();

for ($i=1; $i <=$n; $i++) { 

	$variable = $f;

	$f = $resultado + $f;

	$resultado = $variable;

	$array[$i]=$resultado;

	for ($j=1; $j < $i; $j++){

		print($array[$j].",");

	}

	print("<br/>");

}	

?>