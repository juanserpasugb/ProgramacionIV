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
			<ul>
				<li><a href='index.php'>menu</a></li>
				<li><a href='ejercicio1.php'>ejercicio 1</a></li>
				<li class='active'><a href='#'>ejercicio 2</a></li>
				
				
				<li><a href='ejercicio3.php'>ejercicio 3</a></li>
				<li><a href='ejercicio4.php'>ejercicio 4</a></li>
				<li><a href='ejercicio5.php'>ejercicio 5</a></li>
			</ul>
		</div>
	<align><center>
		<form name="datos" method="POST" action="">
		
		<label for="Edad">INGRESE SU EDAD</label><br>
				<input type="number" name="EDAD"
				size="30" maxlength="30" required
				placeholder="Escriba Edad"><br>
				
				
				<input type='submit' name='Operar' value='Evaluar'/>
				
				
				<?php
				
				if ($_POST ){
		$EDAD =$_POST["EDAD"];
		
	}
		if ($EDAD >= 18){
		echo "es mayor de edad : " .$EDAD;
		
	}
	else if ($EDAD <18){
		echo "Es menor de edad : " .$EDAD;
		
	}
	
	?>
   
   </align></center>
   </body>
   </html>
	