<?php

function suma($numero1,$numero2){

	$suma=$numero1+$numero2;
	return $suma;
}
function resta($numero1,$numero2){

	$resta=$numero1-$numero2;
	return $resta;
}
function multiplicacion($numero1,$numero2){

	$multi=$numero1*$numero2;
	return $multi;
}
function division($numero1,$numero2){

	$divi=$numero1+$numero2;
	return $divi;
}


echo "la suma es :". suma(10,20);
echo "<br>"
echo "la resta es :". resta(10,20);
echo "la multiplicacion es :". multiplicacion(10,20);
echo "la division es :". division(10,20);
?>