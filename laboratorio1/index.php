<html>
   <head>
     <meta charset=utf-8 />
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="estilo1.css">
     <script src="htttp://code.jquery-latest.min.js" type="text/javascript"></script>
     <script src="script.js"></script>
     <title>MENU</title>
   </head>
    <title>
	Programacion IV
	</title>
	<body>
		<div id='cssmenu'>
			<ul>
				<li class='active'><a href='#'>Ejercicio 1</a></li>
				<li><a href='ejercicio2.php'>ejercicio 2</a></li>
				
			</ul>
		</div>


	<table border='1'>
	<tr>
		
		<th>MES</th>
		<th>ventas</th>
	</tr> 

<?php



$datos= array(
		array("MESES"=>"MES 1","ventas"=>550),
		array("MESES"=>"MES 2","ventas"=>200),
		array("MESES"=>"MES 3","ventas"=>600),
		array("MESES"=>"MES 4","ventas"=>100),
		array("MESES"=>"MES 5","ventas"=>100),
		array("MESES"=>"MES 6","ventas"=>700),
		array("MESES"=>"MES 7","ventas"=>300),
		array("MESES"=>"MES 8","ventas"=>350),
		array("MESES"=>"MES 9","ventas"=>900),
		array("MESES"=>"MES 10","ventas"=>400)

		);

$promedio=0;
$mayor=0;
for($i=0;$i<count($datos);$i++){
	echo "<tr><td>" .$datos[$i]["MESES"] ."</td>";
	echo "<td>" .$datos[$i]["ventas"] ."</td></tr>";


$ventas=$datos[$i]["ventas"];


if($ventas>550){
		$mayor=$ventas;

		$MESES=$datos[$i]["MESES"];

	}

$promedio+=$datos[$i]["ventas"];
}

echo "</table>";

echo "<h2><b>El promedio de ventas es: " .  number_format($promedio/count($datos),2);
echo "<h2><b>El mes con mas ventas es: " . $MESES . " con $ ". $mayor;



echo "<pre>";
var_dump($assoc);
echo "</pre>";
?>
	
			

		
	</body>
	<footer>
	</footer>
	
</html>

		