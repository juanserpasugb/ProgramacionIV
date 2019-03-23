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
				<li><a href='ejercicio1.php'>ejercicio 1</a></li>
				<li><a href='ejercicio2.php'>ejercicio 2</a></li>
				<li class='active'><a href='#'>ejercicio 3</a></li>
				<li><a href='ejercicio4.php'>ejercicio 4</a></li>
				<li><a href='ejercicio5.php'>ejercicio 5</a></li>
				
				
			</ul>
		</div>
		
		<align><center>
		<form name="datos" method="POST" action="">
		
		<label for="valorA">INGRESE valor a:</label><br>
				<input type="number" name="valorA"
				size="30" maxlength="30" required
				placeholder="Escriba valor a"><br>
				
				<label for="valorn">INGRESE valor b:</label><br>
				<input type="number" name="valorb"
				size="30" maxlength="30" required
				placeholder="Escriba valor a"><br>
				
				
				<input type='submit' name='Operar' value='Evaluar'/>
				
				
				<?php
				
				if ($_POST ){
					$valora =$_POST["valorA"];
					$valorb =$_POST["valorb"];
					
					$resultado1=$valora + 10;
					$resultado2=$valora + 20;
				}
				
				if($valora != $valorb){
					
				echo "A es diferente de b : " . $resultado1;

				}else if($valora == $valorb){
						echo "a es igual a b : " .$resultado2;
				}
				
				
				?>
   
   </align></center>
   </body>
   </html>
	