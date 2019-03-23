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
				<li class='active'><a href='#'>inicio</a></li>
				<li><a href='#'>Productos</a></li>
				<li><a href='#'>Compania</a></li>
				<li ><a href='#'>contactenos</a></li>
			</ul>
		</div>
		<!-- <form name="frmDatos">	
		 <p>
			<label	fr="nombre">Nombre</label>	 
			<input type="text" name="nombres"
			size="20" maxlength="30"
			pattern="[A-Za-z]{3,30}" //validacion de cantidad de elemntosa escribir
			required //validar campo
			placeholder="Escriba su nombre"/>
			</p>
			
			<input type="submit" name="procesar"
			value="enviar"/>
			
		    <input type="search"/>
			<input type="tel"/> //para telefono teclado 
			<input type="email"/> //para email
			<input type="number" min="18" max="50" step ="1" value="18"/>//capturar edad para validar-->
			
			
		<form name="datos" method="POST" action="">
			
			<label for="nombre">Nombre:</label><br>
			<input type="text" name="nombres"
				size="30" maxlength="30"
				placeholder="Escriba su nombre"><br>
			<label for="apellido">Apellidos:</label><br>
			<input type="text" name="apellidos"
				size="30" maxlength="30"
				placeholder="Escriba sus apellidos"><br>

				<label for="correo">Correo Electronico:</label><br>
			<input type="text" name="email"
				size="30" maxlength="30"
				placeholder="Escriba su correo"><br>
			
			<label for="correo">Numero Telefonico:</label><br>
				<input type="number" name="telefono"
				size="30" maxlength="30"
				placeholder="Escriba su numero telefonico"><br>
			
			<label>Cual es su edad</label><br>
			<input type="radio" name="rango-edad" value="1">0 a 20 años<br> 
			<input type="radio" name="rango-edad" value="2" checked>20 a 30 años<br> 
			<input type="radio" name="rango-edad" value="3">30 a 50 años<br> 
			<input type="radio" name="rango-edad" value="4">+ 50 años<br> 
			
			<label>Seleccione su genero</label><br>
			<input type="radio" name="genero" value="M">Hombre
			<input type="radio" name="genero" value="F">Mujer<br></br>

			
			
			<input type="submit"  name="Procesar" value="procesar">
           <input type="reset" name="limpiar" value="limpiar">
		</form>
	<?php		
	if($_POST) {
				//campos del formulario
				$nombre= $_POST['nombres'];
				$apellido= $_POST['apellidos'];
			    $correo=$_POST['email'];
			    $telefono=$_POST['telefono'];
				$edad=$_POST['rango-edad'];
				$genero=$_POST['genero'];
			
			echo "Bienvenidos: $nombre $apellido Su edad esta en el rango $edad  su genero $genero su numero $telefono y su correo $correo";

			   }
				?>
			
			

		
	</body>
	<footer>
	</footer>
	
</html>

		