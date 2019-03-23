<!DOCTYPE html>

<html>

	<head>
	
	
	</head>
	<title>
	Calculadora
	</title>
	<body>
	<align><center>
		<form name="datos" method="POST" action="">
		
		<label for="numero1">Numero 1:</label><br>
				<input type="number" name="numero1"
				size="30" maxlength="30" required
				placeholder="Escriba prmer numero"><br>
				
				<label for="numero2">Numero 2:</label><br>
				<input type="number" name="numero2"
				size="30" maxlength="30" required
				placeholder="Escriba segundo numero"><br>
	
	<form method="POST">
	<select name='operacion'>
		<option value=1>Sumar</option>
		<option value=2>Resta</option>
		<option value=3>multiplicar</option>
		
	</select>
	<input type='submit' name='Operar' value='Evaluar'/>
	
	<?php 

	if ($_POST["Operar"] ){
		$Numero1 =$_POST["numero1"];
		$Numero2 =$_POST["numero2"];
		
		$Resultado ;
		
		switch ($_POST["operacion"]){
			
			CASE 1:
			$Resultado = $Numero1 + $Numero2;
			print ($Resultado);
			break;
			
			CASE 2:
			$Resultado = $Numero1 - $Numero2;
			print ($Resultado);
			break;
			
			CASE 3:
			$Resultado = $Numero1 * $Numero2;

			print ( $Resultado);
			break;
		}
			
	}
	
	
?>
   
   </align></center>
   </body>
   </html>
	


