<html>



	<head>
	<meta charset=utf-8 />
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="estilo1.css">
     <script src="htttp://code.jquery-latest.min.js" type="text/javascript"></script>
     <script src="script.js"></script>
     <title>EJERCICIO 4</title>
</head>
	
	<body>
	<div id='cssmenu'>
			<ul>
				
				<li><a href='index.php'>menu</a></li>
				<li><a href='ejercicio1.php'>ejercicio 1</a></li>
				<li><a href='ejercicio2.php'>ejercicio 2</a></li>
				<li><a href='ejercicio3.php'>ejercicio 3</a></li>
				<li class='active'><a href='#'>ejercicio 4</a></li>
				<li><a href='ejercicio5.php'>ejercicio 5</a></li>
			</ul>
		</div>
		
		<align><center>
		<form name="datos" method="POST" action="">
		
		<label for="nota">digite su nota :</label><br>
				<input type="number" name="nota"
				size="30" maxlength="30" required
				placeholder="Escriba su nota"><br>
				
				<input type='submit' name='Operar' value='Evaluar'/>
				
				
				<?php
				
				if($_POST){
				$nota=$_POST["nota"];
				}
					if($nota >= 7){
						echo "alumno aprobado " . $nota;
					}
					else if($nota < 7){
						echo "alumno reprobado " . $nota;
					}
					?>
   
		</align></center>
   </body>
</html>