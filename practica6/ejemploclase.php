<?php

class mascota {
//variable de propiedad puedo trabajar fuera de la clase
var $nombre;
var $edad;


//metodo constructor

function __construct($nombre="", $edad=6){
$this->nombre=$nombre;
$this->edad=$edad;
}
//metodo destructor
function __destruct(){

    echo $this->nombre . "se va ";
}

//setters y getters 
function setNombre($valor){
    $this->nombre=$valor;

}

//retornar edad
function getEdad(){
    echo $this->edad;
}

//metodo
function saludar(){
    echo "hola mi nombre es : ". $this->nombre . " y tengo " . $this->edad . "<br/>";
}

}

//instancia 
/*$mascota = new mascota();
$mascota->setNombre=("firulay");
$mascota->saludar();
*/


?>