<?php

class articulo {

// propiedades
private   $codigo;
private   $nombre;
private   $precio;


function __construct($CodigoA, $nombreA, $precioA){
    $this->codigo= $CodigoA;
    $this->nombre=$nombreA;
    $this->precio=$precioA;

}



function obtenercodigo(){
    return " su articulo es : " . " id   " . $this->codigo ;
}
function obtenernombre(){
    return " nombre  : " . $this->nombre;
}
function obtenerprecio(){
   return " precio: $". $this->precio;
}
}
?>