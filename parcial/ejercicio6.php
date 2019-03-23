
	<html>
  <h2>A BASIC TABLE<h2>
<b>HTML Superheroes</b><br>
<?php


echo "
<aligb><center>	<table border='1'>
	<tr>
		<th>Hero</th>
		<th>Power</th>
		<th>Nemesis</th>
	</tr>
";


$datos= array(
		array("Hero"=>"The XMLator","Power"=>"Standars Compliance","Nemesis"=>"Sloppy Code Boy"),
		array("Hero"=>"Captain CSS","Power"=>"Superlayout","Nemesis"=>"Lord Deprecated"),
		array("Hero"=>"Browser Woman","Power"=>"Megacompatibility","Nemesis"=>"Ugly code monster"),

		);

for($i=0;$i<count($datos);$i++){
	echo "<tr><td>" .$datos[$i]["Hero"] ."</td>";
	echo "<td>" .$datos[$i]["Power"] ."</td>";
	echo "<td>" .$datos[$i]["Nemesis"] ."</td></tr>";

		}
echo "</table>";

?>


</html>