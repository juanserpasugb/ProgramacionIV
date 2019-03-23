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
				<li><a href='ejercicio3.php'>ejercicio 4</a></li>
				<li class='active'><a href='#'>ejercicio 5</a></li>
			</ul>
		</div>

<?php

		$datos = array(
		array("Elemento"=>10),
		array("Elemento"=>5),
		array("Elemento"=>8),
		array("Elemento"=>7),
		array("Elemento"=>10),
		array("Elemento"=>9),
		array("Elemento"=>5),
		array("Elemento"=>10),
		array("Elemento"=>9),
		array("Elemento"=>6)

	);




$suma;



	for ($i=0;$i<count($datos);$i++){
		echo "<table>" .$datos[$i]["Elemento"] ."</table>";
		foreach ($datos [$i] as $key=> $value) {
			$suma+=$value;
		}
	}
	echo "<td>"."La suma es : " . $suma. "</td>";
	$promedio = $suma / 10;


	echo "<td>" . "El promedio de los numeros es : " . $promedio. "</td>"

?>

	</body>
</html>