<html>
	<head>
		<title>Saludar</title>
		</head>
		<form action="saludar.php" method="post">
			<select name="sexo">
				<option value="masculino">Masculino</option>
				<option value="femenino">Femenino</option>
				
			</select>
		<input type="submit" value="enviar">
	</form>
</html>



<?php 

	if ($_POST["sexo"] == "femenino"){
		print ("sexo Femenino");
	} else  {
		print ("sexo Masculino");
	}
	
?>