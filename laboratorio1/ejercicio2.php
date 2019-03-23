<html>
   <head>
     <meta charset=utf-8 />
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="estilo1.css">
     <script src="htttp://code.jquery-latest.min.js" type="text/javascript"></script>
     <script src="script.js"></script>
 </head>
    <title>
	PAises-idomas
	</title>
	<body>
			<div id='cssmenu'>
			<ul>
				<li class='active'><a href='index.php'>Ejercicio 1</a></li>
				<li><a href='#'>ejercicio 2</a></li>
				
			</ul>
		</div>

		
<?php

$arr = array(
	array("EL salvador", "Español latino"),
	array("Estados unidos", "Ingles"),
	array("Portugal","Portugues"),
	array("Brazil","Portugues"),
	array("Guatemala","Español latino"),
	array("España","Español"),
	array("Mexico","Español"),
	array("Francia","Frances"),
	array("Rusia","Ruso"),
	array("Egipto","Egipcio"),
);

echo "<center><table border='1'></center>
	<tr>
		<th>Pais</th>
		<th>Idioma</th>
		
	</tr>
	<tr>
";

for($i=0;$i<count($arr);$i++){
	for($j=0;$j<count($arr[$i]);$j++){
	echo "<td>". $arr[$i][$j]."</td>";
	}
	echo "</tr>";

}


?>



	</body>
	<footer>
	</footer>
	
</html>