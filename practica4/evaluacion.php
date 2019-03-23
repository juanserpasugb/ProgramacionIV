<?php




define('MESES', ["ENERO","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre",
"Octubre","Noviembre","Diciembre"]);



echo "
	<form name='venta' method='POST' >
	<label>Escriba el monto de la venta </label>
	<input type='text' name='venta'/><br/>
	<label>Seleccione el mes de venta: </label>
	<select name='mes'>";

	foreach (MESES as $nombre => $numeroMes) {
		// echo "<option value='$nombre'>$numeroMes</option>";

	}
	for ($i=0; $i < count(MESES); $i ++){
	 	echo "<option value='$i'>".MESES[$i] ."</option>";
	}
	
echo "
	</select>
	<input type='submit' value='Calcular' name='Calcular'/>
	</form>
	";


	//evaluar si se estan enviando datos por metodo post
	if ($_POST) {
		$venta= $_POST['venta'];
		$mes=$_POST['mes'];


		$descuento=0;
		$iva=0;
		$total=0;
		$total=$venta;


		switch ($mes) {
			case in_array($mes, range(0,5))  and $total >1500 and $total<=2000 :
				$descuento= $total*0.1;
				$total-=$descuento;
				echo $total;

				break;

			case in_array($mes, range(6,11)) and $total>5000:
				$iva=$total*0.13;
				$descuento=$total*0.1;
				$total-=$descuento;
				$total+=$iva;
				echo  $total;
				
				break;
			case $total>1000 and $total <=1500 and $total<=2000:
				$iva=$total*0.13;
				$descuento=$total*0.1;
				$total-=$descuento;
				$total+=$iva;
				echo  $total;
				break;
			case $total>2000 and $total <=5000 :
				$descuento=$total*0.2;
				$total-=$descuento;
				echo $total;
				break;

			default:

				echo "no aplica";
			

		}
	}
?>