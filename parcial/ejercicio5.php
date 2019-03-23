

<?php
echo "
<aligb><center>	<table border='1'>
	<tr>
		<th>Nombre</th>
		<th>Edad</th>
		<th>Sexo</th>
	</tr>
";


$datos= array(
		array("Nombre"=>"Juan","Edad"=>18,"Sexo"=>"M"),
		array("Nombre"=>"Carmen","Edad"=>18,"Sexo"=>"F"),
		array("Nombre"=>"Jose","Edad"=>19,"Sexo"=>"M"),
		array("Nombre"=>"Raul","Edad"=>21,"Sexo"=>"M"),
		array("Nombre"=>"Carlos","Edad"=>19,"Sexo"=>"M"),
		array("Nombre"=>"Ana","Edad"=>18,"Sexo"=>"F"),
		array("Nombre"=>"Luis","Edad"=>18,"Sexo"=>"M"),
		array("Nombre"=>"Maria","Edad"=>22,"Sexo"=>"F"),
		array("Nombre"=>"Javier","Edad"=>17,"Sexo"=>"M"),
		array("Nombre"=>"Alfredo","Edad"=>20,"Sexo"=>"M"),


		);

$promedio=0;
$mayor=0;

for($i=0;$i<count($datos);$i++){
	echo "<tr><td>" .$datos[$i]["Nombre"] ."</td>";
	echo "<td>" .$datos[$i]["Edad"] ."</td>";
	echo "<td>" .$datos[$i]["Sexo"] ."</td></tr>";

	$Edad=$datos[$i]["Edad"];

if($Edad>18){
		$mayor=$Edad;

		$Nombre=$datos[$i]["Nombre"];

	}

$promedio+=$datos[$i]["Edad"]

}
echo "</table>";



echo "<h2><b>El promedio de Edad es: " .  number_format($promedio/count($datos),2);
echo "<h2><b>El mayor de edad es : " . $Nombre . " con  ". $Edad;



echo "<pre>";
var_dump($assoc);
echo "</pre>";


?>

