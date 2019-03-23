<?php
function operaciones($n1, $n2, $operacion) { 
	$resultado= 0;

	if($operacion == "Sumar") {
		  $resultado = $n1 + $n2; 
	}else if($operacion == "Restar") { 
              $resultado = $n1 - $n2; 
 	}else if($operacion == "Multiplicar") { 
              $resultado = $n1 * $n2; 
 } 
	return $resultado
// llamando la funcion calculando que hace la operacion

} 
// Llamar a la función operaciones 
$r = operaciones(5, 7, "Sumar"); 
echo $r . "<br>"; 
// O podemos imprimir directamente 
echo operaciones(15, 8, "Restar"); 
?> 