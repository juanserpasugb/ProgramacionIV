<!DOCTYPE html>
<html>
<?php
if(isset($_POST['seleccion']))  {
	$idioma= $_POST['idioma'];
	include $idioma. '.php';
}else{
	include 'es.php';
	}

?>


<head>

<title><?php echo TITLE; ?></title>

</head>
<body>

<form method="POST">
	<select name='idioma'>
	<option value='es'>Spanish</option>
	<option value='en'>English</option>
	</select>
	<input type='submit' name='seleccion' value='Cambiar'/>
</form>

<h1><?php echo HEADING_TITLE;?></h1>
<h2><?php echo OVERVIEW_TITLE;?></h2>

</body>
</html>