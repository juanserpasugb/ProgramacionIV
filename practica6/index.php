<?php

INCLUDE 'ejercicio1.php';

$codigoa = new articulo('1', 'lapiz', '0.25');
echo $codigoa->obtenercodigo();
echo $codigoa->obtenernombre();
echo $codigoa->obtenerprecio();
?>