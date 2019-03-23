<?php
//llamando al archivo clase

include("clasecalculadora.php");

//declarando variable e ingresando valores

$num1=5;
$num2=5;

echo "la suma es:" .calculadora::suma($num1,$num2);
echo"<br>";
echo "la resta es:" .calculadora::restar($num1,$num2);
echo"<br>";
echo "la multiplicacion es:" .calculadora::multiplicacion($num1,$num2);
echo"<br>";
echo "la division es:" .calculadora::division($num1,$num2);
echo"<br>";


?>