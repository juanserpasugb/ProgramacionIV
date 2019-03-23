<!DOCTYPE html>



<html>



	<head>
	<meta charset=utf-8 />
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="estilo1.css">
     <script src="htttp://code.jquery-latest.min.js" type="text/javascript"></script>
     <script src="script.js"></script>
     <title>EJERCICIO 1</title>
	
	</head>
	
	<body>
	<div id='cssmenu'>
			<ul><li><a href='index.php'>menu</a></li>
				<li class='active'><a href='#'>ejercicio1</a></li>
				
				<li><a href='ejercicio2.php'>ejercicio 2</a></li>
				<li><a href='ejercicio3.php'>ejercicio 3</a></li>
				<li><a href='ejercicio4.php'>ejercicio 4</a></li>
				<li><a href='ejercicio5.php'>ejercicio 5</a></li>
			</ul>
		</div>
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
				
				<label for="numero3">Numero 3:</label><br>
				<input type="number" name="numero3"
				size="30" maxlength="30" required
				placeholder="Escriba segundo numero"><br>
	
			
	
	<input type='submit' name='Operar' value='Evaluar'/>
	
	<?php 

	if ($_POST )
	{
		$Numero1 =$_POST["numero1"];
		$Numero2 =$_POST["numero2"];
		$Numero3 =$_POST["numero3"];
		
		$Resultado = $Numero1 + $Numero2 + $Numero3;
	
	}
	
	
	
		
			
			if($Resultado > 100){
				echo "La suma es mayor  :" . $Resultado; 
		
			}
			else if ($Resultado <100){
				echo  "LA suma es menor : " .$Resultado;
			}
			
	
	
	
?>
   
   </align></center>
   </body>
   </html>
	



