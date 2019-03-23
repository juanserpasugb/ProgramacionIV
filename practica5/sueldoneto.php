<html> 
<head>
 <title>Datos del empleado</title>
 
</head>
<body>
<?php
//si se cumple el llamado de la clase realizara el proceso
//dentro de este mismo archivo se generan los datos a procesar en la clase ,es por ello que si la condicion se cumple imprime lo solicitado
  if(isset($_POST['enviar'])){
  	//LLAMADO DE LA CLASE 
 include_once("salarioempleado.class.php");
 if(isset($_POST['enviar'])){
  echo "<h3>Boleta de pago del empleado</h3>";
 	$name = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
 	$apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : "";
 	$sueldo = (isset($_POST['sueldo'])) ? doubleval($_POST['sueldo']) : 0.0;
 	$numHorasExtras = (isset($_POST['horasextras'])) ? intval($_POST['horasextras']) :0;
 //Creando instancias de la clase empleado
 $empleado1 = new empleado();
 $empleado1->obtenerSalarioNeto($name, $apellido, $sueldo, $numHorasExtras);
 }
 }

 else{ 
 ?>
 <!Creacion del formulario para ingreso de datos>
 <align><center>

<h2>Practica 5</h2>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
 
 <br><h2>Formulario empleado</h2></br>
 
 <label for="nombre">Nombre empleado:</label>
 <input type="text" name="nombre" size="25" maxlength="30" class="inputField" /><br />
 <label for="apellido">Apellido empleado:</label>
 <input type="text" name="apellido" size="25" maxlength="30" class="inputField" /><br />
 <label for="sueldo">Sueldo empleado ($):</label>
 <input type="text" name="sueldo" size="10" maxlength="6" class="inputField" required="campo necesario" /><br />
 <label for="horasextras">Numero de horas extras:</label>
 <input type="text" name="horasextras" size="10" maxlength="2" class="inputField" required="campo necesario" /><br
/>
 <input type="submit" name="enviar" value="Enviar" class="inputButton" />
 <input type="reset" name="limpiar" value="limpiar" class="inputButton" />
 </center></align>
</form>
<?php

 }
?>
</body>
</html> 